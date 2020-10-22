@extends ('layout')
@section ('titulo')
    Formulário Submetido
@endsection
@section ('header')
    Informação enviada através de form
@endsection
@section ('conteudo')
    {{$nome}}<br>
    {{$morada}}<br>
    {{$automovel}}
@endsection