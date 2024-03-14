@extends('layouts.app') 
@section('content') 
  <style> 
    .uper { 
      margin-top: 40px; 
    } 

  </style> 
  <div class="card uper"> 
    <div class="card-header"> 
      Nueva Materia
    </div> 
    <div class="card-body"> 
      @if ($errors->any()) 
        <div class="alert alert-danger"> 
          <ul> 
            @foreach ($errors->all() as $error) 
              <li>{{ $error }}</li> 
            @endforeach 
          </ul> 
        </div><br /> 
      @endif 
      <form method="post" action="{{ route('Materias.store') }}"> 
        @csrf 
        <div class="form-group"> 
          <label for="Nombre">Nombre Materia:</label> 
          <input type="text" class="form-control" name="Nombre" /> 
        </div> 
        <button type="submit" class="btn btn-primary">Guardar</button> 
        <a href="{{ route('Materias.index') }}" class="btn btn-primary">Regresar</a> 
      </form> 
    </div> 
  </div> 
@endsection 