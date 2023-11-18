<?php
    // if (!function_exists('mysqli_init') && !extension_loaded('mysqli')) {
    //     echo 'We don\'t have mysqli!!!';
    // } else {
    //     echo 'Phew we have it!';
    // }

    // echo "Olá";

    $host = "172.17.0.2:3306";
    $user = "root";
    $password = "";
    $db = "aldo_mais";
    $conn = new mysqli($host,$user, $password, $db );



    // echo $conn;
