@extends('plantillaweb')
@section('secciondinamica')
<h3>Formulario para registro de estudiantes</h3>

<form action="{{url('/estudiantes')}}" method="POST" enctype="multipart/form-data">
  @csrf
<label for="">Registro </label>
  <input type="text" name="nombre" placeholder="Nombres completos " class="form-control mb-2">
  <input type="email" name="email" placeholder="E-mail" class="form-control mb-2">
  <input type="date" name="fecha" placeholder="Fecha ingreso" class="form-control mb-2">
  <input type="file" name="foto" placeholder="Fotografia " class="form-control mb-2" accept="image/*">
  @error('foto')
      <small class="text-danger">{{$message}}</small>
  @enderror
  
  <button class="btn btn-primary btn-block" type="submit"p>Insertar</button>
</form>
@endsection 