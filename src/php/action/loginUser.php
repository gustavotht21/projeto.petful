<?php
require_once '../../../routes.php';
require_once 'connection.php';
$connection = connection();

$data = [
    'email' => $_POST['email'],
    'password' => md5($_POST['password']),
];

$sqlLogin = "SELECT * FROM User WHERE email='{$data['email']}' AND password='{$data['password']}'";
$resultLogin = $connection->query($sqlLogin);

if ($resultLogin->num_rows === 1) {
    $resultLogin= $resultLogin->fetch_assoc();
    session_start();
    $_SESSION['idUser'] = $resultLogin['id'];
    $_SESSION['user'] = $resultLogin['name'];
    $_SESSION['email'] = $resultLogin['email'];

    $route = routes('homeUser');
    header("Location: $route");
} else {
    $route = routes('login');
    $error = "Credenciais incorretas";
    header("Location: $route?error=$error");
}
