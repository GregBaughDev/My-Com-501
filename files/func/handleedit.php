<?php 
    session_start();
    require_once($_SERVER['DOCUMENT_ROOT'] . '/Diploma/501/www/files/inc/conn.php');

    unset($_SESSION["errors"]);
    unset($_SESSION["formData"]);

    $formData = [
        "name" => "",
        "manufacturer"
    ]


?>