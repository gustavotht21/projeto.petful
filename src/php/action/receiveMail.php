<?php

$data = [
    'name' => $_POST['name'],
    'email' => $_POST['email'],
    'subject' => $_POST['subject'],
    'message' => $_POST['message']
];
if (ini_set( 'display_errors', 1 ) === false) {
    $from =
    $to = "reis17265@gmail.com";
    $subject = $data['subject'];
    $message = $data['message'];
    $headers = "From:" . $data['email'];
    mail($to,$subject,$message, $headers);
    echo "A mensagem foi enviada.";
} else {
    error_reporting( E_ALL );
    echo "Deu algum erro!";
}



