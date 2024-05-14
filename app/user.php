<?php
function addUser(PDO $pdo, string $first_name, string $last_name, string $email, string $password):bool {
    $hashedPassword = password_hash($password,PASSWORD_DEFAULT);
    $query = $pdo->prepare("INSERT INTO users (email, password, first_name, last_name, role) VALUES (:email,:password,:first_name,:last_name,'user')");

    $query->bindValue(":email",$email);
    $query->bindValue(":password",$hashedPassword);
    $query->bindValue(":first_name",$first_name);
    $query->bindValue(":last_name",$last_name);

    return $query->execute();
}
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