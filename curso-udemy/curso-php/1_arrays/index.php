<?php 
    // $a = [1,2,3];

    // print_r($a);
    // echo"<br>";

    // // echo$a[0];


    // $arr = ['nome'=> 'shark', 'patas'=> 4, 'cor'=>'marrom'];

    // echo $arr['nome'];
    // echo "<br>";
    // print_r($arr);


    // $carro = [
    //     'marca'=> 'BMW',
    //     'Rodas'=> 4,
    //     'Teto_solar'=> true,
    //     'velocidade_maxima'=> 300,
    //     'Blindado'=> false
    // ];

    // print_r($carro);

    // echo "<br>";

    // $marca = $carro['marca'];
    // $velocidade_maxima = $carro['velocidade_maxima'];

    // echo "O carro é da marca $marca e atinge no máximo $velocidade_maxima km/h";


    $pessoa = [
        'nome'=> 'Aldo',
        'idade'=> '30',
        'profissao'=> 'Programador',
        'graduação'=> 'Sistemas de informação',
    ];

    $maior_idade = 18;

    if($pessoa['idade'] >= $maior_idade){
        echo "A pessoa é maior de idade!";
    }

?>