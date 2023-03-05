<?php
require_once 'src/php/components/navbar.php';
require_once 'src/php/components/card.php';
require_once 'src/php/components/animal_card.php';
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

    <div class="container">
        <div class="row w-100 mb-5">
            <?= card("70,00", "56,00", "20", "2x R$ 23,00", "Ração para cachorros P")?>
            <?= card("70,00", "56,00", "20", "2x R$ 23,00", "Ração para cachorros P")?>
            <?= card("70,00", "56,00", "20", "2x R$ 23,00", "Ração para cachorros P")?>
            <?= card("70,00", "56,00", "20", "2x R$ 23,00", "Ração para cachorros P")?>
        </div>
    </div>

        <div class="container">
            <div class="row w-100 mb-5">
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