<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>@yield('titulo')</title>
    </head>
    <body>
        <h1 style="color: #00ff00">@yield('header')</h1>
        @yield('conteudo')
        <br>
        <br>
        <br>
        <div class="menu-rpdape">
            <h2>Opções de navegação</h2>
            <a href="{{route('entrada.entrada')}}">Início</a>
            <br>
            <a href="{{route('equipas.listarEquipas')}}">Ver equipas</a>
    </body>
</html>