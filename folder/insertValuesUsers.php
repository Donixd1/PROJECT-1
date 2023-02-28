<?php
try {


$pdo = new PDO('mysql:host=localhost;dbname=testdb', "root", "");


$username = "user";
$temPass = "user";
$password = password_hash($temPass, PASSWORD_DEFAULT);

$sql = "INSERT INTO users (username , pass) VALUES ('$username', '$password')";

$pdo->exec($sql);

echo "New record created sucessfully";

$lastId = $pdo->lastInsertId();

echo "Last inserted user id is $lastId";


}catch(PDOException $e){
    echo $e->getMessage();
}


?>