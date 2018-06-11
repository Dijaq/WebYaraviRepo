@extends('layoutuser')

@section('contenido')

  <h1>Encuestas</h1>
  <a class="btn btn-primary" href="{{route('encuesta.create')}}" style="float: right;">Crear Encuesta</a>
  <br><br>
	<table class="table table-striped">
    <thead>
      <tr>
        <th>Nombre</th>
        <th>Fecha Inicio</th>
        <th>Fecha Fin</th>
        <th>Acciones</th>
      </tr>
    </thead>
    <tbody>
      @foreach($encuestas as $encuesta)
        <tr>
          <td>{{$encuesta->name}}</td>
          <td>{{$encuesta->fechaInicio}}</td>
          <td>{{$encuesta->fechaFin}}</td>
          @if($encuesta->estado == 2)
            <td align="center">
              <a class="btn btn-info btn-sm" href="{{route('encuesta.edit', $encuesta->id)}}">Editar</a>
              <form style="display: inline" method="POST" action={{route('encuesta.deshabilitar', $encuesta->id)}}>
                {!! csrf_field() !!}
                {!! method_field('DELETE') !!}
                <button class="btn btn-danger btn-sm">Deshabilitar</button>
              </form>
            </td>
          @else
            <td align="center">
              <form style="display: inline" method="POST" action={{route('encuesta.habilitar', $encuesta->id)}}>
                {!! csrf_field() !!}
                {!! method_field('DELETE') !!}
                <button class="btn btn-danger btn-sm">Habilitar</button>
              </form>
            </td>
          @endif
        </tr>
      @endforeach
    </tbody>
  </table>

@stop