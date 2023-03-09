<?php
require_once 'src/php/components/sectionText.php';
require_once 'routes.php';
require_once 'src/php/action/connection.php';
$connection = connection();
?>

<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>petful - Entre em Contato</title>
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

<a class="btn ps-4 pe-4 fw-bold text-white mt-5 ms-3" style="background-color: #10A19D" href="<?=routes('home')?>">Voltar para a home</a>


<main class="container-xl row justify-content-between align-items-center gap-3 mb-5 w-100">
    <section class="d-xl-flex flex-column col-auto ">
        <?= sectionText('Entre em Contato')?>
        <div style="background-color: #10A19D" class="d-flex justify-content-center align-items-center gap-5 rounded pt-3 pb-3">
            <div class="d-flex flex-column justify-content-center gap-3 w-100 p-5">
                <p class="text-start text-white">
                    Abaixo listamos as formas de contato disponíveis em nossa loja.<br>
                    Estamos ansiosos em lhe atender da melhor maneira possível
                </p>
                <h3 class="text-start text-white">Central de Atendimento ao Cliente</h3>
                <p class="text-start text-white fw-bold fs-56px ">(69) 91234-5678</p>
                <h3 class="text-start text-white">E-mail</h3>
                <p class="text-start text-white">
                    Entre em contato pelo o e-mail <br><strong>contact@petful.devborges.tech</strong>
                </p>
                <h3 class="text-start text-white">Nosso  Endereço</h3>
                <p class="text-start text-white">
                    petful.devborges.tech<br>
                    IFRO Campus Calama<br>
                    Porto Velho - RO<br>
                    CEP: 76820-441
                </p>
            </div>
        </div>
    </section>

    <section class="col-auto d-flex flex-column">
        <?= sectionText('Formulário de Contato')?>
        <div class="container mt-5">
            <p class="text-danger"><?php if (isset($_GET['error'])) echo $_GET['error']?></p>
            <p class="text-success"><?php if (isset($_GET['message'])) echo $_GET['message']?></p>
        </div>
        <div class="w-100 w-md-100 d-flex justify-content-center align-items-center gap-5 shadow">
            <form action="src/php/action/receiveMail.php" class="m-5 d-flex flex-column w-100" method="post">
                <div class='mb-3'>
                    <label for='name' class='form-label'>Nome</label>
                    <input type='text' name='name' class='form-control' id='name' required>
                </div>
                <div class='mb-3'>
                    <label for='email' class='form-label'>Endereço de E-mail</label>
                    <input type='email' name='email' class='form-control' id='email' required>
                </div>
                <div class='mb-3'>
                    <label for='subject' class='form-label'>Assunto</label>
                    <input type='text' name='subject' class='form-control' id='subject' required>
                </div>
                <div class='mb-3'>
                    <label for='message' class='form-label'>Mensagem</label>
                    <textarea class="form-control" name="message" id="message" maxlength="1000" rows="5" required></textarea>
                </div>
                <div class="mb-3 d-flex gap-2">
                    <button type="submit" class="btn btn-warning fw-bold w-100">Enviar Mensagem</button>
                </div>
            </form>
        </div>
    </section>


</main>

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