<?php

echo "<h1> Objetos </h1>";

    class Pessoa {
        function falar(){
            echo "Olá Pessoal"; 
        }
    }


    $aldo = new Pessoa();

    $aldo->nome = "<h1>Aldo</h1>";

    echo $aldo->nome;

    echo "<br>";
    echo $aldo->falar();
?>