<?php
require_once 'src/php/components/navbar.php';
require_once 'src/php/components/card.php';
require_once 'src/php/components/animal_card.php';
require_once 'src/php/components/sectionText.php';
require_once 'src/php/action/connection.php';
$connection = connection("laradock_mysql_1", "root", "root", "petful");
?>

<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>petful</title>
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
<?php navbar();?>

<div class="d-none d-xl-flex w-100 justify-content-center mt-5 mb-5 ms-0 me-0">
    <img src="https://petful.devborges.tech/public_html/Banner.jpg" alt="Banner promocional. Cupom de boas vindas: BENVINDO ">
</div>

<div class="row w-100 justify-content-evenly gap-2 w-100 mt-3 ms-0 me-0">
    <a href="" class="d-flex align-items-center rounded col-auto text-decoration-none" style="background-color: #D9D9D9; width: 25rem; height: 6.25rem">
        <img class="me-2" style="width: 45px; height: 45px" src="https://petful.devborges.tech/public_html/clock.svg" alt="">
        <div class="ms-2 d-flex flex-column">
            <span class="text-black">Receba em horas</span>
            <span class="text-black text-decoration-underline">Confira</span>
        </div>
    </a>
    <a href="" class="d-flex align-items-center rounded col-auto text-decoration-none" style="background-color: #D9D9D9; width: 25rem; height: 6.25rem">
        <img class="me-2" style="width: 45px; height: 45px" src="https://petful.devborges.tech/public_html/truck.svg" alt="">
        <div class="ms-2 d-flex flex-column">
            <span class="text-black">Frete grátis Brasil</span>
            <span class="text-black text-decoration-underline">Confira</span>
        </div>
    </a>
    <a href="" class="d-flex align-items-center rounded col-auto text-decoration-none" style="background-color: #D9D9D9; width: 25rem; height: 6.25rem">
        <img class="me-2" style="width: 45px; height: 45px" src="https://petful.devborges.tech/public_html/cards.svg" alt="">
        <div class="ms-2 d-flex flex-column">
            <span class="text-black">Até 10 vezes sem juros</span>
            <span class="text-black text-decoration-underline">Confira</span>
        </div>
    </a>
    <a href="" class="d-flex align-items-center rounded col-auto text-decoration-none" style="background-color: #D9D9D9; width: 25rem; height: 6.25rem">
        <img class="me-2" style="width: 45px; height: 45px" src="https://petful.devborges.tech/public_html/store.svg" alt="">
        <div class="ms-2 d-flex flex-column">
            <span class="text-black">Retire e troque na loja</span>
            <span class="text-black text-decoration-underline">Confira</span>
        </div>
    </a>
</div>

<div id="products">
    <?= sectionText('Produtos')?>
    <div class="row justify-content-center w-100 mb-5 ms-0 me-0">
        <?php
        $sqlSelect = "SELECT * FROM Product";
        $resultSelect = $connection->query($sqlSelect);

        while ($res = mysqli_fetch_assoc($resultSelect)) {
            echo card("{$res['oldPrice']}", "{$res['price']}", "{$res['discount']}", "{$res['alternativePrice']}", "{$res['name']}");
        }?>
    </div>
</div>

<div id="services">
    <?= sectionText('Serviços')?>
    <div class="row justify-content-center w-100 mb-5 ms-0 me-0">
        <?php
        $sqlSelect = "SELECT * FROM Service";
        $resultSelect = $connection->query($sqlSelect);

        while ($res = mysqli_fetch_assoc($resultSelect)) {
            echo card("{$res['oldPrice']}", "{$res['price']}", "{$res['discount']}", "{$res['alternativePrice']}", "{$res['name']}");
        }?>
    </div>
</div>

<div id="sections">
    <?= sectionText('Sessões')?>
    <div class="row justify-content-center w-100 mb-5 ms-0 me-0">
        <?= animal_card("Gato")?>
        <?= animal_card("Cachorro")?>
        <?= animal_card("Pássaro")?>
        <?= animal_card("Roedor")?>
        <?= animal_card("Casa e jardim")?>
    </div>
</div>

<div id="marks">
    <?= sectionText('Marcas')?>
    <div class="row justify-content-center w-100 mb-5 ms-0 me-0">
        <?= animal_card("Pedigree")?>
        <?= animal_card("Whiskas")?>
        <?= animal_card("PetClean")?>
    </div>
</div>
</body>
</html>