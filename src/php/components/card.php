<?php

function card($oldPrice, $newPrice, $priceDescont, $alternativePrice, $serviceName)
{
    return "
    <div class='col-auto mt-2'>
        <div class='shadow card border-1 border-light' style='width: 18rem; height: 26rem'>
            <img src='https://cdn2.iconfinder.com/data/icons/tools-flat-v-1-free/129/saw-512.png' 
            style='width: 152px; align-self: center' 
            class='card-img-top' alt='...'>
            <div class='card-body'>
                <p style='text-decoration: line-through'>R$ $oldPrice</p>
                <p class='fs-4 fw-bold'>R$ $newPrice <span class='p-1 rounded text-white fw-bold ms-2' style='background-color: #10A19D'>-$priceDescont%</span></p>
                <p>$alternativePrice</p>
                <p class='card-text fw-bold' style='height: 2rem'>$serviceName</p>
                <div class='d-flex justify-content-center w-100 h-100'>
                    <a href='' class='btn rounded w-100 h-25 fw-bold f-4 d-flex justify-content-center align-items-center' style='background-color: #FFBF00'>Comprar</a>
                </div>
            </div>
        </div>
    </div>
    ";
}