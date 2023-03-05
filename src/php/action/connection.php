<?php

function connection($server, $user, $password, $database)
{
    if (mysqli_connect($server, $user, $password, $database)) {
        return mysqli_connect($server, $user, $password, $database);
    } else {
        return 'erro';
    }
}
