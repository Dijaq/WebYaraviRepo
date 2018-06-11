@extends('layoutuser')

@section('contenido')

  <div style="text-align:center;">
  <h1>Editar Publicidad</h1>
  <br>
  @if(session()->has('info'))
    <h3>{{session('info')}}</h3>
  @else

      <form method="POST" action="{{route('encuesta.update', $encuesta->id)}}">

        {!! method_field('PUT') !!}
      
        {!!csrf_field()!!}
      
        <div class="row">   

          <div class="col-md-4">
              <label for="name" style="text-align:left;">
                Nombre de Encuesta: 
              </label>
            </div>
            <div class="col-md-8"><input class="form-control" type="text" name="name" value="{{$encuesta->name}}">
                {!! $errors->first('name', '<span class="error">:message</span>') !!}</div>
            <br><br>
            <div class="col-md-4">
              <label for="fechaInicio">
                Fecha Inicio de Encuesta:
              </label>
            </div>
            <div class="col-md-8">
              <input class="form-control" type="date" name="fechaInicio" value="{{$encuesta->fechaInicio}}">
              {!! $errors->first('fechaInicio', '<span class="error">:message</span>') !!}
            </div>
            <br><br>
            <div class="col-md-4">
              <label for="fechaFin">
                Fecha Fin de Encuesta:
            </label>
            </div>
            <div class="col-md-8">
              <input class="form-control" type="date" name="fechaFin" value="{{$encuesta->fechaFin}}">
              {!! $errors->first('fechaFin', '<span class="error">:message</span>') !!}
            </div>
            <br><br>
          <div class="col-md-12"><input class="btn btn-primary" type="submit" value="Editar"></div>
        </div>
      
      </form>
    </div>
  @endif

@stop