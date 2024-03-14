@extends('layouts.app') 

@section('content') 
  <style> 
    .uper { 
      margin-top: 40px; 
    } 

  </style> 
  <div class="card uper"> 
    <div class="card-header"> 
      Crear Materias.
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
      <form method="post" action="{{ route('Materias.editar', $materias->Materias_ID) }}"> 
        @csrf 
        @method('PATCH') 
        <div class="form-group">  
          <label for="Nombre">Nombre Materia:</label> 
          <input type="text" class="form-control" name="Nombre" /> 
        </div> 
        <div class="form-group"> 
          <label for="id_tarea">ID_Tarea:</label> 
          <input type="text" class="form-control" name="id_tarea" /> 
        </div> 
        <div class="form-group"> 
          <label for="id_actividad">ID_Actividad :</label> 
          <input type="text" class="form-control" name="id_tarea" />
        </div>
        <div class="form-group"> 
          <label for="id_evidencia">ID_Evidencia:</label> 
          <input type="text" class="form-control" name="id_evidencia" /> 
        </div>
        <div class="form-group"> 
          <label for="id_examen">ID_Examen:</label> 
          <input type="text" class="form-control" name="id_examen" /> 
        </div> 
        <button type="submit" class="btn btn-primary">Guardar</button> 
        <a href="{{ route('Materias.index') }}" class="btn btn-primary">Regresar</a> 
        <td><a href="{{ route('Materias.editar', $materias->Materias_ID) }}" class="btn btn-primary">Editar</a></td>
      </form> 
    </div> 
  </div> 
@endsection