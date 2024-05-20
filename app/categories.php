<?php
function getCategories(PDO $pdo):array|bool
{
    $query = $pdo->prepare("SELECT * FROM categories");
    $query->execute();
    return $query->fetchAll(PDO::FETCH_ASSOC);
}