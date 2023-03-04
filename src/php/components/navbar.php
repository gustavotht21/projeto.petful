<?php

function navbar()
{
    echo "
    <nav class='navbar navbar-expand-lg' style='background-color: #FF7000'>
    <div class='container-fluid'>
        <a class='navbar-brand text-white fw-bold' href='#'>petful</a>
        <button class='navbar-toggler text-white border border-white' type='button' data-bs-toggle='offcanvas' data-bs-target='#offcanvasNavbar' aria-controls='offcanvasNavbar'>
            <span class='navbar-toggler-icon navbar-dark'></span>
        </button>
        <div class='offcanvas offcanvas-end' style='background-color: #FF7000' tabindex='-1' id='offcanvasNavbar' aria-labelledby='offcanvasNavbarLabel'>
            <div class='offcanvas-header'>
                <h5 class='offcanvas-title text-white' id='offcanvasNavbarLabel'>petful</h5>
                <div data-bs-theme='dark'>
                    <button type='button' class='btn-close' data-bs-dismiss='offcanvas' aria-label='Close'></button>
                </div>
            </div>
            <div class='offcanvas-body' style='background-color: #FF7000'>
                <ul class='navbar-nav justify-content-end flex-grow-1 pe-3'>
                    <li class='nav-item'>
                        <a class='nav-link text-white fw-bold link' aria-current='page' href='#'>Home</a>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link text-white fw-bold link' href='#'>Serviços</a>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link text-white fw-bold link' href='#'>Produtos</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
    ";
}
