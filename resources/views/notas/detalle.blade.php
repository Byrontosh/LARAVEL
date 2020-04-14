@extends('layouts.app')

@section('content')


<h1>DETALLE NOTA</h1>

    <h4>ID: {{$nota->id}}</h4>
    <h4>NOMBRE: {{$nota->nombre}}</h4>
    <h4>DESCRIPCIÓN: {{$nota->descripcion}}</h4>
    <h4>USUARIO: {{$nota->usuario}}</h4>

@endsection