<?php

    session_start();

    include_once("connection.php");
    include_once("url.php");


    $data = $_POST;
    // MODIFICAÇÕS NO BANCO
    if(!empty($data)){  

        print_r($_POST);

        // CRIAR CONTATO
        if($data["type"] === "create"){
            $name = $data["name"];
            $phone = $data["phone"];
            $observations = $data["observations"];     
            
            $query = "INSERT INTO contacts (name, phone, observations) VALUES (:name, :phone, :observations) ";
            $stmt = $conn->prepare($query);
            $stmt->bindParam(":name", $name);
            $stmt->bindParam(":phone", $phone);
            $stmt->bindParam(":observations", $observations);

            try{

                $stmt->execute();
                $_SESSION["msg"] = "Contato criado com Sucesso!";
            }catch(PDOException $e){
                //ERRO NA CONEXÂO
                $error = $e->getMessage();
                echo "ERRO:  $error";
            }


        }
        // REDIRECT HOME
        header("Location:" . $BASE_URL . "../../index.php");


    }else {
            // Retorna um contato
    $id;
    if(!empty($_GET)){
        $id = $_GET["id"];
    }
    if(!empty($id)){
        $query = "SELECT * FROM contacts WHERE id = :id";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        $contact = $stmt->fetch();
    }

    // Retorna todos os contatos
    $contacts = [];
    $query = "SELECT * FROM contacts";

    $stmt = $conn->prepare($query);
    
    $stmt->execute();

    $contacts = $stmt->fetchAll();

    }
// Fechar conexão
$conn = null;
