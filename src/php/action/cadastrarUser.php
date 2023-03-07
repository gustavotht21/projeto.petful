<?php
require_once '../../../routes.php';
require_once 'connection.php';
$connection = connection();

$data = [
    'name' => $_POST['name'],
    'email' => $_POST['email'],
    'password' => md5($_POST['password']),
    'confirmPassword' => md5($_POST['confirmPassword']),
];

if ($data['password'] === $data['confirmPassword']) {
    $sqlInsert = "SELECT * FROM User WHERE email='{$data['email']}'";
    $resultInsert = $connection->query($sqlInsert);

    if ($resultInsert->num_rows === 0) {
        $sqlInsert = "INSERT INTO User (name, email, password) VALUES ('${data['name']}', '${data['email']}', '${data['password']}')";
        $resultInsert = $connection->query($sqlInsert);

        $route = routes('cadastro');
        $message = "Conta cadastrada com sucesso!";
        header("Location: $route?message=$message");
    } else {
        $route = routes('cadastro');
        $error = "Já existe uma conta cadastrada com esse email";
        header("Location: $route?error=$error");
    }
} else {
    $route = routes('cadastro');
    $error = "As senhas não coincidem";
    header("Location: $route?error=$error");
}