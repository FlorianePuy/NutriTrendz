<?php
    function saveArticle(PDO $pdo, string $title, string $content_long,string $content_short, string|null $image, int $category_id, int $id = null):bool
{
    if ($id === null) {
        $query = $pdo->prepare("INSERT INTO articles (title, content_long, content_short, image, category_id) "
            ."VALUES(:title, :content_long, :content_short :image, :category_id)");
    } else {
        $query = $pdo->prepare("UPDATE `articles` SET title = :title, "
            ."content_long = :content_long, content_short = :content_short"
            ."image = :image, category_id = :category_id WHERE id = :id;");

        $query->bindValue(':id', $id, $pdo::PARAM_INT);
    }

    $query->bindValue(':title', $title);
    $query->bindValue(':content_long', $content_long);
    $query->bindValue(':content_short', $content_short);
    $query->bindValue(':image',$image);
    $query->bindValue(':category_id',$category_id, $pdo::PARAM_INT);
    return $query->execute();
}
 function getArticles (PDO $pdo, int $limit=null, int $page=1):array|bool
 {
     if ($page<=0){
         $page=1;
     }
     $sql = "SELECT * FROM articles ORDER BY id DESC";
     if ($limit){
             $offset = ($page-1)*$limit;
             $sql.=" LIMIT :offset,:limit ";
             $query = $pdo->prepare($sql);
             $query->bindValue(":offset",$offset,PDO::PARAM_INT);
             $query->bindValue(":limit",$limit,PDO::PARAM_INT);
     }else{
         $query = $pdo->prepare($sql);
     }
     $query->execute();
     return $query->fetchAll(PDO::FETCH_ASSOC);
 }
function getArticleById(PDO $pdo, int $id):array|bool
{
  $query= $pdo->prepare("SELECT * FROM articles WHERE id=:id");
  $query->bindValue(":id",$id,PDO::PARAM_INT);
  $query->execute();
  return $query->fetch(PDO::FETCH_ASSOC);
}

function countTotalArticles(PDO $pdo):array
{
    $query = $pdo->prepare("SELECT COUNT(*) as total FROM articles");
    $query ->execute();
    return $query->fetch(PDO::FETCH_ASSOC);
}