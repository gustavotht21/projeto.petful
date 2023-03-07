<?php
require_once 'src/php/components/navbarUser.php';
require_once 'src/php/components/card.php';
require_once 'src/php/components/animal_card.php';
require_once 'src/php/components/sectionText.php';
require_once 'src/php/action/connection.php';
$connection = connection();

session_start();

if (! isset($_SESSION['user'])) {
    $home = routes('home');
    header("Location: $home");
}

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
<?php navbarUser(5);?>
<p class="mb-5 fw-bold fs-4 text-center mt-5 text-success">Bem-vindo(a) <?=$_SESSION['user']?></p>

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
            echo card("{$res['oldPrice']}", "{$res['price']}", "{$res['discount']}", "{$res['alternativePrice']}", "{$res['name']}", "{$res['id']}", "Product");
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
            echo card("{$res['oldPrice']}", "{$res['price']}", "{$res['discount']}", "{$res['alternativePrice']}", "{$res['name']}", "{$res['id']}", "Service");
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

<footer>
    <section style='background-color: #FFBF00;' class='d-flex w-100 row justify-content-evenly me-0 ms-0 align-items-start p-3'>
        <div class='col-auto mt-3'>
            <a class="text-decoration-none text-black" href=""><p class='fs-5 fw-bold'>Intitucional</p></a>
            <a class="text-decoration-none text-black" href=""><p class='fw-normal'>Sobre a petful</p></a>
            <a class="text-decoration-none text-black" href=""><p class='fw-normal'>Trabalhe Conosco</p></a>
            <a class="text-decoration-none text-black" href=""><p class='fw-normal'>Canal de Denúncias</p></a>
            <a class="text-decoration-none text-black" href=""><p class='fw-normal'>Relações com Investidores</p></a>
            <a class="text-decoration-none text-black" href=""><p class='fw-normal'>Portal petful</p></a>
            <a class="text-decoration-none text-black" href=""><p class='fw-normal'>Expansão</p></a>
        </div>
        <div class='col-auto mt-3'>
            <a class="text-decoration-none text-black" href=""><p class='fs-5 fw-bold'>Aqui Você Encontra</p></a>
            <a class="text-decoration-none text-black" href=""><p class='fw-normal'>Assinatura petful</p></a>
            <a class="text-decoration-none text-black" href=""><p class='fw-normal'>Retire na Loja</p></a>
            <a class="text-decoration-none text-black" href=""><p class='fw-normal'>Pesquise Lá, Compre Aqui</p></a>
            <a class="text-decoration-none text-black" href=""><p class='fw-normal'>Nossos Diferenciais</p></a>
            <a class="text-decoration-none text-black" href=""><p class='fw-normal'>Vale a Pena Ser Fiel</p></a>
            <a class="text-decoration-none text-black" href=""><p class='fw-normal'>Como comprar</p></a>
        </div>
        <div class='col-auto mt-3'>
            <a class="text-decoration-none text-black" href=""><p class='fs-5 fw-bold'>Nossas Políticas</p></a>
            <a class="text-decoration-none text-black" href=""><p class='fw-normal'>Entrega e Frete</p></a>
            <a class="text-decoration-none text-black" href=""><p class='fw-normal'>Pagamentos e Reembolso</p></a>
            <a class="text-decoration-none text-black" href=""><p class='fw-normal'>Trocas e Devolução</p></a>
            <a class="text-decoration-none text-black" href=""><p class='fw-normal'>Campanhas e Promoções</p></a>
            <a class="text-decoration-none text-black" href=""><p class='fw-normal'>Política de Privacidade</p></a>
        </div>
        <div class='col-auto mt-3'>
            <a class="text-decoration-none text-black" href=""><p class='fs-5 fw-bold'>Atendimento Alô petful</p></a>
            <a class="text-decoration-none text-black" href=""><p class='fw-normal'>Meus Pedidos</p></a>
            <a class="text-decoration-none text-black" href=""><p class='fw-normal'>Meu Cadastro</p></a>
            <a class="text-decoration-none text-black" href=""><p class='fw-normal'>Minhas Assinaturas</p></a>
            <a class="text-decoration-none text-black" href=""><p class='fw-normal'>Fale Conosco</p></a>
            <a class="text-decoration-none text-black" href=""><p class='fw-normal'>Ouvidoria</p></a>
        </div>
    </section>
    <section style='background-color: #10A19D; color: #FFF;' class='d-flex w-100 row justify-content-evenly me-0 ms-0 align-items-center p-3'>
        <div class='d-flex justify-content-evenly'>
            <div class='col-auto'>
                <p class="fs-4 fw-semibold">Redes sociais</p>
                <div class="d-flex gap-1">
                    <a href=""><img style="width: 3.25rem; height: 3.25rem" src="https://petful.devborges.tech/public_html/facebook.svg" alt=""></a>
                    <a href=""><img style="width: 3.25rem; height: 3.25rem" src="https://petful.devborges.tech/public_html/insta.svg" alt=""></a>
                    <a href=""><img style="width: 3.25rem; height: 3.25rem" src="https://petful.devborges.tech/public_html/twitter.svg" alt=""></a>
                    <a href=""><img style="width: 3.25rem; height: 3.25rem" src="https://petful.devborges.tech/public_html/youtube.svg" alt=""></a>
                </div>
            </div>
            <div class='col-auto'>
                <p class="fs-4 fw-semibold">Meios de pagamento</p>
                <div class="d-flex gap-2">
                    <img style="width: 3.25rem; height: 3.25rem" src="https://petful.devborges.tech/public_html/mastercard.svg" alt="">
                    <img style="width: 3.25rem; height: 3.25rem" src="https://petful.devborges.tech/public_html/visa.svg" alt="">
                    <img style="width: 3.25rem; height: 3.25rem" src="https://petful.devborges.tech/public_html/elo.svg" alt="">
                </div>
            </div>
        </div>
        <p class='text-center mt-5' style='font-size: 0.75rem'>
            petful - CNPJ 65.679.435/0001-50 - Endereço: Porto Velho - RO - CEP: 76822-142 <br>
            Copyright&copy 2023 petful — Todos os direitos reservados
        </p>

    </section>
</footer>
</body>
</html>