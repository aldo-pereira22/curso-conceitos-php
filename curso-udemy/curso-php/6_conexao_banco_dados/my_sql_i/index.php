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

    // $table = "itens";
    // $nome = "Xicara";
    // $descricao = "É uma Xicara usada na cor rosa";

    // $q = "INSERT INTO $table (nome, descricao) VALUES ('$nome', '$descricao')";
    
    // $conn->query($q);
    // $conn->close();



    //  Fazer seleção no banco de dados


    // $table = "itens";
    // $nome = "Xicara";
    // $descricao = "É uma Xicara usada na cor rosa";

    // $q = "INSERT INTO $table (nome, descricao) VALUES ('$nome', '$descricao')";
//     $q = "SELECT * FROM itens";
//     $result = $conn->query($q);

//     $conn->close();

// // Retorna um resultado
//     $item = $result->fetch_assoc();


//     // Retorna todos os resultados

//     $itens = $result->fetch_all();
//     print_r($itens);


// $nome = "Celular XIAMI";
// $descricao = "Celular Usado com a tela quebrada!";
// $stmt = $conn->prepare("INSERT INTO itens (nome, descricao) VALUES (?, ?)");

// $stmt->bind_param("ss", $nome, $descricao); // s = String, i = Integer, d = double;
// $stmt->execute();




// $nome = "NOTEBOOK";

// $stmt = $conn->prepare("SELECT * FROM itens WHERE nome= ?");
// $stmt->bind_param("s", $nome);
// $stmt->execute();

// $result = $stmt->get_result();

// $data = $result->fetch_all();

// print_r($data);



// $nome = "NOTEBOOK";
// $descricao = "NOTEBOOK LENOVO I7 40GB";
// $stmt = $conn->prepare("UPDATE itens SET descricao = ? WHERE nome = ?");
// $stmt->bind_param("ss", $descricao, $nome);

// $stmt->execute();
// if($stmt->error){
//     echo "ERRO: " . $stmt->error;
// }



$descricao="É uma Xicara usada na cor rosa";
$stmt = $conn->prepare("DELETE FROM itens WHERE descricao = ?");
$stmt->bind_param("s", $descricao);
$stmt->execute();
$conn->close();








