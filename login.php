<?php
session_start();
require('connection.php');

if(empty($_POST["user"]) || empty($_POST["password"])){
    $_SESSION['nao_autenticado'] =  true;
    header("Location: index.php");
    exit();
}

$user = $_POST['user'];
$password = $_POST['password'];

$query = $pdo->prepare("SELECT * FROM login where user = '$user' and password=md5('$password');");
$query->execute();

$row = $query->rowCount();

if($row == 1){
    $_SESSION['user'] = $user;
    header("Location: home.php");
    exit();
}else{
    $_SESSION['nao_autenticado'] =  true;
    header("Location: index.php");
    exit();
}