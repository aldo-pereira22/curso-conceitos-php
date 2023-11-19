<?php


    $host = "172.17.0.2:3306";
    $db = "aldo_mais";
    $user = "root";
    $password = "";
    $conn = new PDO("mysql:host=$host;dbname=$db", $user, $password);
    
    // $nome = "Notebook Gamer da Lenovo";
    // $descricao = "Suporta todos os Jogos da atualidade";

    // $stmt = $conn->prepare("INSERT INTO itens (nome, descricao) VALUES (:nome, :descricao)");
    // $stmt->bindParam(":nome", $nome);
    // $stmt->bindParam(":descricao", $descricao);

    // $stmt->execute();




    // $nome = "Celular XIAMI";
    // $novoNome = "Celular XIAOMI";
    // $descricao = "Celular novo na caixa";

    // $stmt = $conn->prepare("UPDATE itens SET nome = :novoNome, descricao = :descricao WHERE nome = :nome" );

    // $stmt->bindParam(":nome", $nome);
    // $stmt->bindParam(":novoNome", $novoNome);
    // $stmt->bindParam(":descricao", $descricao);

    // $stmt->execute();

    $nome = "NOTEBOOK";
    $stmt = $conn->prepare("SELECT * FROM itens");
    // $stmt->bindParam(":nome", $nome);
    $stmt->execute();

    $data = $stmt->fetch(PDO::FETCH_ASSOC);

    print_r($data);

    $itens = $stmt->fetchAll(PDO::FETCH_ASSOC);

    print_r($itens);