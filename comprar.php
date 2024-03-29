<?php
require_once 'src/php/components/navbar.php';
require_once 'src/php/action/connection.php';
require_once 'routes.php';
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

<?php
$connection = connection();
$id = intval(base64_decode($_GET['product']));
$name = mysqli_escape_string($connection, $_GET['name']);
$name = htmlspecialchars($name);
$type = $_GET['pt'];

if ($type === 'Product') {
    $sqlProduct = "SELECT * FROM Product WHERE id={$id} AND name='{$name}'";
    $resultProduct = $connection->query($sqlProduct);
    $res = $resultProduct->fetch_assoc();
    $input = "
    <div class='mb-3'>
                <label for='qtd' class='form-label'>Quantidade</label>
                <input value='1' type='number' name='qtd' min='1' class='form-control' id='qtd'>
            </div>
    ";

} else {
    $sqlService = "SELECT * FROM Service WHERE id={$id} AND name='{$name}'";
    $resultService = $connection->query($sqlService);
    $res = $resultService->fetch_assoc();
    date_default_timezone_set('America/Porto_Velho');
    $date = date('Y-m-d h:i', strtotime('+2 day'));
    $input = "
    <div class='mb-3'>
                <label for='date' class='form-label'>Data</label>
                <input value='$date' type='datetime-local' name='date' min='$date' class='form-control' id='date'>
            </div>
    ";
}
?>

<div class="container mt-3">
    <a href="<?= routes('home')?>">
        <button class="btn rounded text-white fw-bold" style="background-color: #10A19D; width: 10rem; height: 3rem;">Voltar</button>
    </a>
</div>

<main class="d-flex justify-content-center align-items-center gap-5 mt-5">
    <section>
        <img style="width: 10rem" src="https://cdn2.iconfinder.com/data/icons/tools-flat-v-1-free/129/saw-512.png" alt="">
    </section>
    <section>
        <form action="#" class="m-5">
            <p class="fw-bold"><?= $res['name']?></p>
            <?= $input?>

            <p class="text-decoration-line-through">R$ <?= $res['oldPrice']?></p>
            <p class='fs-5 fw-bold'>R$ <?=$res['price']?> <span class='p-1 rounded text-white fw-bold ms-2' style='background-color: #10A19D'>-<?=$res['discount']?>%</span></p>
            <p><?= $res['alternativePrice']?></p>
            <div class="d-flex align-items-center gap-3">
                <button type="submit" class='btn rounded fw-bold f-4 d-flex justify-content-center align-items-center' style='background-color: #FFBF00; width: 24rem; height: 4rem'>Comprar</button>
                <button class="btn text-white" style="background-color: #10A19D">
                    <img style="width: 2rem; height: auto" src="https://petful.devborges.tech/public_html/plus-cart.svg" alt="">
                </button>
            </div>
        </form>
    </section>
</main>


<footer class="">
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