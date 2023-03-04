<?php
require_once 'routes.php';

function redirect($routeName)
{
    $route = routes($routeName);
    header("Location: $route");
}