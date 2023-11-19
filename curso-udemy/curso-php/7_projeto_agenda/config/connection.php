<?php 
        $host = "172.17.0.2:3306";
        $db = "agenasda";
        $user = "root";
        $password = "";

        try{

            $conn = new PDO("mysql:host=$host;dbname$db", $user, $password);


            // Ativar o modo de erros
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        }catch(PDOException $e){
            //ERRO NA CONEXÂO
            $error = $e->getMessage();
            echo "ERRO:  $error";
        }
?>