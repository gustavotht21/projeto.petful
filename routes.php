<?php

function routes ($routeName)
{
    switch ($routeName)
    {
        case 'home':
            return 'https://petful.devborges.tech';
        case 'servicos':
            return 'a';
        case 'produtos':
            return 'b';
        default:
            return 'c';
    }
}
