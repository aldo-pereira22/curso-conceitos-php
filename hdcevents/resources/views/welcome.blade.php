@extends('layouts.main')

@section('title', 'HDC Events')


@section('content',)
<body class="antialiased">
            <h1>Algum título</h1>
            <img src="/img/banner.jpg" alt="Banner">
            @if(10 < 5)
                <p>A condição é true</p>
            @endif

            <p>{{$nome}}</p>
            
            @if($nome  == "Pedro")
                <p>O nome é pedro</p>
            @elseif($nome == "Aldo Pereira")
                <p>O nome é <b>{{ $nome }}</b> </p> e tem <b> {{$idade}}</b> e trabalha como <b> {{$profissao}} </b>
            @else
                <p>O nome não é pedro</p>
            @endif

            @for($i = 0; $i < count($arr); $i++)
                <b><p> {{ $arr[$i] }} - {{ $i + 1}}</p></b>
                @if($i == 2)
                    <p>O i é 2</p>
                @endif
            @endfor
            
    @foreach ($nomes as $nome)
            <h1><b> {{$nome}} </b></h1>
    @endforeach

            @php
                $name = "Aldo";
                echo $name;
            @endphp

            
@endsection