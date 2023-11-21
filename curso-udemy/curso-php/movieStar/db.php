<?php

    $db_name = "moviestart";
    $host = "172.17.0.2:3306";
    $db_user = "root";
    $db_password = "";


    try{

        $conn = new PDO("mysql:host=$host;dbname=$db_name", $db_user, $password);
        // Ativar o modo de erros
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    }catch(PDOException $e){
        //ERRO NA CONEXÂO
        $error = $e->getMessage();
        echo "ERROSSS:  $error";
    }


    // $conn = new PDO("mysql:dbname=". $db_name . ";host=" . $db_host, $db_user, $db_password);
    // $conn = new PDO("mysql:host=$host;dbname=$db_name", $db_user, $password);

    // HABILITAR ERROS PDO
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
?>