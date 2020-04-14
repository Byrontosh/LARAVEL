@extends('layouts.app')

@section('content')
<form action="{{route('notas.store')}}" method="POST">
@csrf


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


<input type="text" name="nombre" class="form-control mb-2" value="{{ old('nombre') }}">
<input type="text" name="descripcion" class="form-control mb-2" value="{{ old('descripcion') }}">
<button class="btn btn-info btn-block" type="submit">Agregar</button>

</form>
@endsection
