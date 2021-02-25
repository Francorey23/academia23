@extends('Plantillaweb')

@section('secciondinamica')
    <h1>Lista de apartamentos terminados</h1>
    <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Direccion</th>
      <th scope="col">Barrio</th>
      </tr>
  </thead>
  <tbody>
    @foreach($vrdato as $dato)
        <tr>
         <th scope="row">{{$dato->id}}</th>
        <td>{{$dato->nombre}}</td>
        <td>{{$dato->email}}</td>
        <td>{{$dato->fecha}}</td>
        <td>
        <img class="img-fluid" src="{{asset($dato->foto)}}" alt="" width="70">  
        </td>
        <td><a href="{{url('/estudiantes/'.$dato->id.'/edit')}}"> <button type="button" class="btn btn-warning btn-sm">Editar</button></a>
        </tr>
    @endforeach
  </tbody>
</table>
@endsection
