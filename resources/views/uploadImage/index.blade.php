@extends('layoutuser')

@section('contenido')

  <h1>Imagenes</h1>
  <a class="btn btn-primary" href="{{route('imagen.create')}}" style="float: right;">Crear Imagen</a>
  <br><br>
	<table class="table table-striped">
    <thead>
      <tr>
        <th>Url Imagen</th>
        <th>Imagen</th>
        <th>Acciones</th>
      </tr>
    </thead>
    <tbody>
      @foreach($imagenes as $imagen)
        <tr>
          <td>{{$imagen->dirImage}}</td>
          <td></td>
          @if($imagen->estado == 2)
            <td align="center">
              <a class="btn btn-info btn-sm" href="{{route('imagen.edit', $imagen->id)}}">Editar</a>
              <form style="display: inline" method="POST" action={{route('publicity.deshabilitar', $imagen->id)}}>
                {!! csrf_field() !!}
                {!! method_field('DELETE') !!}
                <button class="btn btn-danger btn-sm">Deshabilitar</button>
              </form>
            </td>
          @else
            <td align="center">
              <form style="display: inline" method="POST" action={{route('publicity.habilitar', $imagen->id)}}>
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