<?php
require_once "routes.php";
require_once "src/php/components/navbarUser.php";
session_start();
if (base64_encode($_SESSION['idUser']) !== $_GET['id']) {
    if (empty($_SESSION['idUser'])) {
        $rota = routes("home");
    } else {
        $rota = routes("homeUser");
    }
    header("Location: $rota");
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>petful - Carrinho</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
    </style>
</head>
<body>
<?= navbarUser()?>

<main class="d-flex w-100 h-100 gap-4 mt-5">
    <section class="m-5 flex w-100">
        <div class="w-100 h-10 p-4 rounded d-flex gap-4 align-items-center shadow mt-2">
            <img style="width: 3.75rem; height: 3.75rem" src="https://github.com/gustavotht21.png" alt="">
            <div>
                <p class="m-0 fw-semibold fs-4">Ração pra cão</p>
                <p class="m-0 fw-bold" style="color: #10A19D">Preço: R$ 56,00</p>
            </div>
            <div class="d-flex justify-content-end">
                <input type="text">
            </div>
        </div>
    </section>
    <section class="m-5 shadow p-4 rounded w-50">
        <p class="fw-bold fs-3">Finalizar pedido</p>

        <p class="m-0">Subtotal: R$ 56,00</p>
        <p class="m-0">Desconto: R$ 0,00</p>
        <p class="m-0">Total a pagar: R$ 56,00</p>
    </section>
</main>
</body>
</html>