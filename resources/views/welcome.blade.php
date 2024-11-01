<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Laravel</title>
    </head>

    <body class="antialiased">
    <img src="/img/hamburguer.jpg" alt="Lanche">
        <h1>Sistema de Hamburgueria</h1>
        {{--
        <p>Nome = {{$nome}} tem código {{$codigo}}</p>
        <p>Exemplo do for</p>
        @for ($i = 0; $i < count($lanches); $i++)
	        <p>{{$lanches[$i]}} - {{$i}}</p>
        @endfor
        <p>Exemplo do foreach</p>
        @foreach ($lanches as $lanche)
            <p>{{$loop->index}}</p>
            <p>{{$lanche}}</p>
        @endforeach
        <p>Exemplo do PHP</p>
        @php
            $nome = "Batata frita";
            echo $nome;
        @endphp
        --}}
    </body>
</html>
