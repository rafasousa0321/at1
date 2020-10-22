@extends('layout')
@section('titulo')
A minha APP
@endsection
@section('header')
Bem-vindo
@endsection
@section('conteudo')
<h2>Esta é a minha primeira web APP em Laravel</h2>
<p>Para que conste... estou a usar um controller</p>
<a href="{{route('equipas.listarEquipas')}}">ver equipas</a>
<br>
<br>
<img src="{{asset('imagens/riczao.jpg')}}">
@endsection