@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Lista de notas de {{auth()->user()->name}}</div>
                <td><a href="{{route('notas.create')}}" class="btn btn-info btn-block">CREAR</a></td>

                <div class="card-body">

                
<table class="table">
  <thead>
    <tr>
    <th scope="col">Id</th>
      <th scope="col">Nota</th>
      <th scope="col">Descripcion</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($notas as $n)
    <tr>
      <th scope="row">{{$n->id}}</th>
      <td>{{$n->nombre}}</td>
      <td>{{$n->descripcion}}</td>
      <td><a href="{{route('notas.show',$n)}}" class="btn btn-info btn-block">Visualizar</a></td>
      <td><a href="{{route('notas.edit',$n)}}" class="btn btn-success btn-block">Actualizar</a></td>
      <td>
      <form action="{{route('notas.destroy',$n->id)}}" method="POST">
        @csrf
        @method('DELETE')
      <button class="btn btn-danger btn-block" type="submit">Eliminar</button>
    </form>
    </td>
    </tr>
    @endforeach
  </tbody>
</table>
           
                </div>
            </div>
        </div>
    </div>
</div>

@endsection