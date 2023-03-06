<?php
require_once 'routes.php';
function navbar()
{
    $home = routes('home');
    echo "
    <nav class='navbar navbar-expand-lg' style='background-color: #FF7000'>
    <div class='container-fluid'>
        <a class='navbar-brand text-white fw-bold' href=''>
            <img src='https://petful.devborges.tech/public_html/petful.svg' alt='logo'>
        </a>
        <button class='navbar-toggler text-white border border-white' type='button' data-bs-toggle='offcanvas' data-bs-target='#offcanvasNavbar' aria-controls='offcanvasNavbar'>
            <span class='navbar-toggler-icon navbar-dark'></span>
        </button>
        <div class='offcanvas offcanvas-end' style='background-color: #FF7000' tabindex='-1' id='offcanvasNavbar' aria-labelledby='offcanvasNavbarLabel'>
            <div class='offcanvas-header'>
                <a class='offcanvas-title text-white' id='offcanvasNavbarLabel'>
                    <img src='https://petful.devborges.tech/public_html/petful.svg' alt='logo'>
                </a>
                <div data-bs-theme='dark'>
                    <button type='button' class='btn-close' data-bs-dismiss='offcanvas' aria-label='Close'></button>
                </div>
            </div>
            <div class='offcanvas-body' style='background-color: #FF7000'>
                <ul class='navbar-nav justify-content-end flex-grow-1 pe-3'>
                    <li class='nav-item'>
                        <a class='nav-link text-white fw-bold link' aria-current='page' href='$home'>Home</a>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link text-white fw-bold link' href='#products'>Produtos</a>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link text-white fw-bold link' href='#services'>Serviços</a>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link text-white fw-bold link' href='#sections'>Sessões</a>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link text-white fw-bold link' href='#marks'>Marcas</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
    ";
}
