<?php

 function getArticles (PDO $pdo, int $limit=null, int $page=1):array
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

function countTotalArticles(PDO $pdo):array {
    $query = $pdo->prepare("SELECT COUNT(*) as total FROM articles");
    $query ->execute();
    return $query->fetch(PDO::FETCH_ASSOC);
}