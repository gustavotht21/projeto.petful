<?php

function animal_card($animalMark)
{
    $animalMark = strtolower($animalMark);
    $animalMark = ucfirst($animalMark);
    switch ($animalMark)
    {
        case 'Gato':
            $animalMarkLink = "cat.svg";
            $animalMarkRedirect = "#";
            break;
        case 'Cachorro':
            $animalMarkLink = "dog.svg";
            $animalMarkRedirect = "#";
            break;
        case 'Pássaro':
            $animalMarkLink = "bird.svg";
            $animalMarkRedirect = "#";
            break;
        case 'Roedor':
            $animalMarkLink = "mouse.svg";
            $animalMarkRedirect = "#";
            break;
        case 'Casa e jardim':
            $animalMarkLink = "house.svg";
            $animalMarkRedirect = "#";
            break;
        case 'Pedigree':
            $animalMarkLink = "pedigree.svg";
            $animalMarkRedirect = "#";
            break;
        case 'Whiskas':
            $animalMarkLink = "whiskas.svg";
            $animalMarkRedirect = "#";
            break;
        case 'Petclean':
            $animalMarkLink = "petclean.svg";
            $animalMarkRedirect = "#";
            break;
        default:
            $animalMarkLink = "cat.svg";
            $animalMarkRedirect = "#";
    }

    return "
        <a href='$animalMarkRedirect' class='text-decoration-none col-auto'>
            <div class='mt-3'>
                <div class='shadow card border-1 border-light d-flex flex-col justify-content-center align-items-center' style='width: 12.5rem; height: 12.5rem'>
                    <img src='https://petful.devborges.tech/public_html/$animalMarkLink' style='width: 60px; height: 60px;' class='card-img-top' alt='...'>
                    <p class='mt-2 text-black'>$animalMark</p>
                </div>
            </div>
        </a>
    ";
}