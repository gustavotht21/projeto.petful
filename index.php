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
</head>
<body>
<?php navbar();?>

<img src="https://replit.com/@GustavoBorges8/KhakiDarkturquoiseWorkplace#bird.svg" alt="">

<div class="container">
    <?= sectionText('Produtos')?>
    <div class="row justify-content-center w-100 mb-5">
        <?php
        $sqlSelect = "SELECT * FROM Product";
        $resultSelect = $connection->query($sqlSelect);

        while ($res = mysqli_fetch_assoc($resultSelect)) {
            echo card("{$res['oldPrice']}", "{$res['price']}", "{$res['discount']}", "{$res['alternativePrice']}", "{$res['name']}");
        }?>
    </div>
</div>

<div class="container">
    <?= sectionText('Serviços')?>
    <div class="row justify-content-center w-100 mb-5">
        <?php
        $sqlSelect = "SELECT * FROM Service";
        $resultSelect = $connection->query($sqlSelect);

        while ($res = mysqli_fetch_assoc($resultSelect)) {
            echo card("{$res['oldPrice']}", "{$res['price']}", "{$res['discount']}", "{$res['alternativePrice']}", "{$res['name']}");
        }?>
    </div>
</div>

<div class="container">
    <?= sectionText('Sessões')?>
    <div class="row justify-content-center w-100 mb-5">
        <?= animal_card("Gato")?>
        <?= animal_card("Cachorro")?>
        <?= animal_card("Whiskas")?>
        <?= animal_card("Pássaro")?>
        <?= animal_card("PetClean")?>
        <?= animal_card("Casa e jardim")?>
    </div>
</div>
</body>
</html>