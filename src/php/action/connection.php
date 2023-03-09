<?php

function connection($server="laradock-mysql-1", $user="root", $password="root", $database="petful")
{
    if (mysqli_connect($server, $user, $password, $database)) {
        return mysqli_connect($server, $user, $password, $database);
    } else {
        return 'erro';
    }
}
