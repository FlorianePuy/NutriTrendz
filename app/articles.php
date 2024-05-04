<?php

 function getArticles (PDO $pdo):array
 {
     $query = $pdo->prepare("SELECT * FROM articles;");
     $query->execute();
     return $query->fetchAll(PDO::FETCH_ASSOC);
 };
