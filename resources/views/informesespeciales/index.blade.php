@extends('layoutuser')

@section('contenido')


<h1>Informes Especiales</h1>
  <a class="btn btn-primary" href="{{route('informeespecial.create')}}" style="float: right;">Crear Informe Especial</a>
  <br><br>
	<div class="row">
    <table id="example" class="table table-striped">
        <thead>
          <tr>
            <th>Fecha Publicación</th>
            <th>Título</th>
            <th style="width: 16%;">Acciones</th>
          </tr>
        </thead>
        <tbody>
          @foreach($informesespeciales as $informeespecial)
            <tr>
              <td>{{$informeespecial->fechaPublicacion}}</td>
              <td>{{$informeespecial->title}}</td>
                 @if($informeespecial->estado == 2)
                  <td align="center">
                    <a class="btn btn-info btn-sm" href="{{route('informeespecial.edit', $informeespecial->id)}}">Editar</a>
                    <form style="display: inline" method="POST" action={{route('informeespecial.deshabilitar', $informeespecial->id)}}>
                      {!! csrf_field() !!}
                      {!! method_field('DELETE') !!}
                      <button class="btn btn-danger btn-sm">Deshabilitar</button>
                    </form>
                  </td>
                @else
                  <td align="center">
                    <form style="display: inline" method="POST" action={{route('informeespecial.habilitar', $informeespecial->id)}}>
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
  </div>

  <script>
      $(document).ready( function () {
      $('#example').DataTable();
  } );
  </script>


  @stop