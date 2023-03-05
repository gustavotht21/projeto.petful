<?php

function sectionText($text)
{
    return "
        <div class='d-flex d-flex align-items-center m-5' style='height: 4rem'>
            <div class='rounded' style='height: 4rem;width: 0.25rem; background-color: #540375'></div>
            <p class='text-center fs-3 ms-3 mt-2 fw-semibold' style='color: #540375'>$text</p>
        </div>
    ";
};
?>

