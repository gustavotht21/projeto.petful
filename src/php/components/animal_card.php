<?php

function animal_card($animalMark)
{
    $animalMark = ucfirst($animalMark);
    switch ($animalMark)
    {
        case 'Gato':
            $animalMarkLink = "https://petful.devborges.tech/public_html/cat.svg";
            $animalMarkRedirect = "#";
            break;
        case 'Cachorro':
            $animalMarkLink = "https://petful.devborges.tech/public_html/dog.svg";
            $animalMarkRedirect = "#";
            break;
        case 'Pássaro':
            $animalMarkLink = "https://petful.devborges.tech/public_html/bird.svg";
            $animalMarkRedirect = "#";
            break;
        case 'Roedor':
            $animalMarkLink = "https://petful.devborges.tech/public_html/mouse.svg";
            $animalMarkRedirect = "#";
            break;
        case 'Casa e jardim':
            $animalMarkLink = "https://petful.devborges.tech/public_html/house.svg";
            $animalMarkRedirect = "#";
            break;
        case 'Pedigree':
            $animalMarkLink = "https://petful.devborges.tech/public_html/pedigree.svg";
            $animalMarkRedirect = "#";
            break;
        case 'Whiskas':
            $animalMarkLink = "https://petful.devborges.tech/public_html/whiskas.svg";
            $animalMarkRedirect = "#";
            break;
        case 'Petclean':
            $animalMarkLink = "https://petful.devborges.tech/public_html/petclean.svg";
            $animalMarkRedirect = "#";
            break;
        default:
            $animalMarkLink = "https://petful.devborges.tech/public_html/cat.svg";
            $animalMarkRedirect = "#";
    }

    return "
        <a href='$animalMarkRedirect' class='text-decoration-none col-auto'>
            <div class='mt-3'>
                <div class='shadow card border-1 border-light d-flex flex-col justify-content-center align-items-center' style='width: 12.5rem; height: 12.5rem'>
                    <img src='$animalMarkLink' style='width: 60px; height: 60px;' class='card-img-top' alt='...'>
                    <p class='mt-2 text-black'>$animalMark</p>
                </div>
            </div>
        </a>
    ";
}