<?php

function information($title, $image)
{
    switch ($image)
    {
        case 'truck':
            $link = routes('detal2');
            break;
        case 'cards':
            $link = routes('detal3');
            break;
        case 'store':
            $link = routes('detal4');
            break;
        default:
            $link = routes('detal1');
            break;
    }
    return "
        <a href='$link' class='d-flex align-items-center rounded col-auto text-decoration-none' style='background-color: #D9D9D9; width: 25rem; height: 6.25rem'>
        <img class='me-2' style='width: 45px; height: 45px' src='https://petful.devborges.tech/public_html/$image.svg' alt=''>
        <div class='ms-2 d-flex flex-column'>
            <span class='text-black'>Receba em horas</span>
            <span class='text-black text-decoration-underline'>Confira</span>
        </div>
    </a>
    ";
}
