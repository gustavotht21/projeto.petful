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
        default:
            return 'c';
    }
}
