<?php

function routes ($routeName)
{
    switch ($routeName)
    {
        case 'home':
            return 'http://localhost/';
        case 'comprar':
            return 'http://localhost/comprar.php';
        case 'cadastro':
            return 'http://localhost/cadastro.php';
        case 'login':
            return 'http://localhost/login.php';
        case 'homeUser':
            return 'http://localhost/home.php';
        case 'contato':
            return 'http://localhost/contato.php';
        default:
            return "http://$routeName";
    }
}
