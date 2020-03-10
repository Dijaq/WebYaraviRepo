@extends('layoutuser')

@section('contenido')


<h1>Campañas</h1>
  <a class="btn btn-primary" href="{{route('campania.create')}}" style="float: right;">Crear Campaña</a>
  <br><br>
	<div class="row">
    <table id="example" class="table table-striped">
        <thead>
          <tr>
            <th>Fecha Publicación</th>
            <th>Título</th>
            <th style="width: 20%;">Acciones</th>
          </tr>
        </thead>
        <tbody>
          @foreach($campanias as $campania)
            <tr>
              <td>{{$campania->fechaPublicacion}}</td>
              <td>{{$campania->title}}</td>
                 @if($campania->estado == 2)
                  <td align="center">
                    <a class="btn btn-info btn-sm" href="{{route('campania.edit', $campania->id)}}">Editar</a>
                    <form style="display: inline" method="POST" action={{route('campania.deshabilitar', $campania->id)}}>
                      {!! csrf_field() !!}
                      {!! method_field('DELETE') !!}
                      <button class="btn btn-danger btn-sm">Deshabilitar</button>
                    </form>
                  </td>
                @else
                  <td align="center">
                    <form style="display: inline" method="POST" action={{route('campania.habilitar', $campania->id)}}>
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
      $('#example').DataTable(
        {
          "order": [[0, "desc"]]
        });
  } );
  </script>


  @stop