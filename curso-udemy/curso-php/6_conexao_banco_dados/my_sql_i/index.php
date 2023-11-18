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


    // $sql = "SELECT * FROM itens";
    // $result = $conn->query($sql);
    // print_r($result);


    //  CRIAR UMA TABELA
    // $q = "CREATE TABLE teste(nome VARCHAR(100), sobrenome VARCHAR(100))";

    // $q = "DROP TABLE teste";
    // $conn->query($q);

    // $conn->close();


    $table = "itens";
    $nome = "Xicara";
    // $descricao = "É uma Xicara usada na cor rosa";

    $q = "INSERT INTO $table (nome) VALUES ($nome)";
    
    $conn->query($q);
    $conn->close();
