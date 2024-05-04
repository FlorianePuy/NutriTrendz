<?php

 function getArticles (PDO $pdo, int $limit=null):array
 {
     $sql = "SELECT * FROM articles ORDER BY id DESC";
     if ($limit){
         $query = $pdo->prepare($sql."LIMIT :limit");
         $query->bindValue(":limit",$limit,PDO::PARAM_INT);
     }else{
         $query = $pdo->prepare($sql);
     }
     $query->execute();
     return $query->fetchAll(PDO::FETCH_ASSOC);
 };
