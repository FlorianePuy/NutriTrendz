<?php

function verifyUserLoginPassword(PDO $pdo, string $email, string $password):bool|array {
    $query = $pdo->prepare("SELECT * FROM users WHERE email=:email");
    $query->bindValue(":email",$email);
    $query->execute();
    $user = $query->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($password,$user['password'])){
        return $user;
    }else{
        return false;
    }

}