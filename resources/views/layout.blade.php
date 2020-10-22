<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>@yield('titulo')</title>
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/all.min.css')}}">
    </head>
    <body>
        <h1 style="color: #0000ff">@yield('header')</h1>
        @yield('conteudo')
        <br>
        <br>
        <br>
        <div class="menu-rpdape">
            <h2>Opções de navegação</h2>
            <a href="{{route('entrada.entrada')}}"><i class="fas fa-arrow-circle-right"></i>   Início</a>
            <br>
            <a href="{{route('equipas.listarEquipas')}}"><i class="fas fa-arrow-circle-right"></i>   Ver equipas</a>
            <br>
            <a href="{{route('contacto.index')}}"><i class="fas fa-arrow-circle-right"></i>   Contacto</a>
        </div>
        <script src="{{asset('js/jquery.min.js')}}"></script>
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
        <script src="{{asset('js/all.min.js')}}"></script>
    </body>
</html>