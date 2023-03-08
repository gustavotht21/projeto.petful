<?php
require_once 'routes.php';
function navbarUser($cartItems)
{
    $home = routes('homeUser');
    $cart = routes('cart');
    $perfil = routes('perfil');
    $logout = routes('logout');
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
                <ul class='navbar-nav justify-content-end gap-2 flex-grow-1 pe-3'>
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
                    <li class='nav-item rounded-4 ps-1 pe-1 me-2' style='background-color: #FFBF00; max-width: 6rem;'>
                        <a class='nav-link link text-center' href='$perfil'>
                            <img style='width: 1.5rem; height: 1.5rem' src='https://petful.devborges.tech/public_html/user.svg' alt=''>
                        </a>
                    </li>
                    <li class='nav-item rounded-4 ps-1 pe-1 me-2' style='background-color: #FFBF00; max-width: 6rem;'>
                        <a class='nav-link link text-center' href='$cart'>
                            <img style='width: 1.5rem; height: 1.5rem' src='https://petful.devborges.tech/public_html/cart.svg' alt=''>
                            <span class='ms-2 fw-bold text-white'>$cartItems</span>
                        </a>
                    </li>
                    <li class='nav-item rounded-4 ps-1 pe-1 me-2 flex align-items-center justify-content-center' style='background-color: #FFBF00; max-width: 6rem;'>
                        <a class='nav-link link text-center' href='$logout'>
                            <img style='width: 1.5rem; height: 1.5rem' src='https://petful.devborges.tech/public_html/logout.svg' alt=''>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
    ";
}
