@extends('layouts.app') 
@section('content') 
  <style> 
    .margin { 
      margin-top: 40px; 
    } 
  </style> 
  <div class="margin"> 
    @if (session()->get('success')) 
      <div class="alert alert-success"> 
        {{ session()->get('success') }} 
      </div><br /> 
    @endif 
    <div class="row"> 
      <a class="btn btn-primary" href="{{ route('Materias.crear') }}">Agregar</a> 
    </div> 

    <table class="table table-striped"> 
      <thead> 
        <tr> 
          <th>Materias_ID</th> 
          <th width="80px"></th> 
          <th width="80px"></th> 
        </tr> 
      </thead> 
      <tbody> 
        @foreach ($materias as $materias) 
          <tr> 
            <td><a href="{{ route('Materias.show', $materias->Materias_ID) }}">{{ $materias->Materias_ID }}</a></td> 
            <td><a href="{{ route('Materias.editar', $materias->Materias_ID) }}" class="btn btn-primary">Editar</a></td> 
            <td> 
              <form action="{{ route('Materias.destroy', $materias->Materias_ID) }}" method="post"> 
                @csrf 
                @method('DELETE') 
                <button class="btn btn-danger" type="submit">Eliminar</button> 
              </form> 
            </td> 
          </tr> 
        @endforeach 
      </tbody> 
    </table> 
  <div> 
@endsection