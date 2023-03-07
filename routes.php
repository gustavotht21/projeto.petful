<?php

function routes ($routeName)
{
    switch ($routeName)
    {
        case 'home':
            return 'http://localhost/';
        case 'servicos':
            return 'a';
        case 'produtos':
            return 'b';
        case 'comprar':
            return 'http://localhost/comprar/';
        case 'cadastro':
            return 'http://localhost/cadastro.php';
        case 'login':
            return 'http://localhost/login.php';
        default:
            return "http://$routeName";
    }
}
