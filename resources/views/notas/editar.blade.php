@extends('layouts.app')

@section('content')


<h1>ACTUALIZAR NOTA</h1>

<form action="{{route('notas.update',$nota->id)}}" method="POST">
@csrf
@method('PUT')
@error('nombre')
<div class="alert alert-danger alert-dismissible fade show" role="alert">
  El nombre es requerido
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@enderror
@error('descripcion')
<div class="alert alert-danger alert-dismissible fade show" role="alert">
  La descripcion es requerida
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@enderror

<input type="text" name="nombre" class="form-control mb-2" value="{{$nota->nombre}}">
<input type="text" name="descripcion" class="form-control mb-2" value="{{$nota->descripcion}}">
<button class="btn btn-info btn-block" type="submit">ACTUALIZA</button>

</form>


@endsection