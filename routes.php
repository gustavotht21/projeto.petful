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
        default:
            return "http://$routeName";
    }
}
