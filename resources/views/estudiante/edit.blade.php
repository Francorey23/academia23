@extends('plantillaweb')

@section('secciondinamica')
<h1>Editar Producto {{$editEstudiante->id}} </h1>
<form action="{{route('estudiantes.update', $editEstudiante)}}"  method="POST" enctype="multipart/form-data">
    @method('PUT')
    @csrf

    <label>Codigo del estudiante</label>
    <input type="text"  name="id" placeholder="Codigo" class="form-control mb-2" value="{{$editEstudiante->id}}">
    
    <label>Nombre del estudiante</label>
    <input type="text"  name="nombre" placeholder="Nombre" class="form-control mb-2" value="{{$editEstudiante->nombre}}">
  
    <label>Email</label>
    <input type="Email"  name="email" placeholder="Email" class="form-control mb-2" value="{{$editEstudiante->email}}">
    <input type="date"  name="fecha" placeholder="Año nacimiento" class="form-control mb-2" value="{{$editEstudiante->fecha}}">
    <input type="File"  name="foto" placeholder="Fotografia" class="form-control mb-2" value="{{$editEstudiante->fotografia}}">
     
  <button type="submit" class="btn btn-primary btn-block">Insertar</button>
</form>
@endsection
