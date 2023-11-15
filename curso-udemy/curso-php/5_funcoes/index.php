<?php 
        function soma(){
        
            $a = 5;
            $b = 4;
    
            echo "<br>" . $a + $b . "<br>";
    
        }
    
        soma();
?>

        <h1>Funções!</h1>
<?php 

    // Testando função
    echo strtoupper("teste função PHP");

    $arr = ["Teste", "Olá", "Balão", "Janela", "Planta"];

    $teste = implode(" -> ", $arr);

    echo "<br>";
    echo " <br>Função implode do PHP: " . $teste;



    function multiplicacao(){
        $x = 5;
        $y = 4.1;
        $z = 8;

        $resultado = $x * $y *$z;
        echo "<br>";

        echo $resultado . "<br>";
    }

    multiplicacao();


    $lista = ["Arroz", "Trigo", "Cerveja", "Sal", "Vinagre"];

    function listaparaString($arr){
        $str = "Vc levou os seguintes itens do mercado: ";

        for($i = 0; $i < count($arr); $i++){
            
            if($i + 1 == count($arr)){
                $str .= "$arr[$i]. ";
            }else {
                $str .= "$arr[$i], ";
            }
        }

        return $str;
    }

    echo listaparaString($lista);
?>

