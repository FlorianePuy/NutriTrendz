<?php

 function getArticles (PDO $pdo, int $limit=null):array
 {
     if ($limit){
         $query = $pdo->prepare("SELECT * FROM articles LIMIT :limit ORDER BY id DESC;");
         $query->bindValue(":limit",$limit,PDO::PARAM_INT);
     }else{
         $query = $pdo->prepare("SELECT * FROM articles");
     }
     $query->execute();
     return $query->fetchAll(PDO::FETCH_ASSOC);
 };
