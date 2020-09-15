@extends('layoutuser')

@section('contenido')

  <h1>Videos</h1>
  <a class="btn btn-primary" href="{{route('video.create')}}" style="float: right;">Crear Video</a>
  <br><br>
	<div class="table-responsive">
    <table class="table table-striped">
        <thead>
          <tr>
            <th>Id</th>
            <th>Título</th>
            <th>Tipo</th>
            <th style="text-align: center">En vivo</th>
            <th style="text-align: center">Acciones</th>
          </tr>
        </thead>
        <tbody>
          @foreach($videos as $video)
            <tr>  
                <td>{{$video->id}}</td>
                <td>{{$video->title}}</td>
              @if($video->idTipo == 2)
                <td>NUESTROS HÉROES</td>
              @else
                <td>GENERAL</td>
              @endif
              @if($video->finalizado == 1)
                <td align="center">
                  <form style="display: inline" method="POST" action={{route('video.finalizar', $video->id)}}>
                    {!! csrf_field() !!}
                    {!! method_field('DELETE') !!}
                    <button class="btn btn-info btn-sm">Finalizar Video</button>
                  </form>
                </td>
              @else
                <td align="center">
                  <form style="display: inline" method="POST" action={{route('video.desfinalizar', $video->id)}}>
                    {!! csrf_field() !!}
                    {!! method_field('DELETE') !!}
                    <button class="btn btn-danger btn-sm">Activar Video</button>
                  </form>
                </td>
              @endif

                </td>
              @if($video->estado == 2)
                <td align="center">
                  <a class="btn btn-info btn-sm" href="{{route('video.edit', $video->id)}}">Editar</a>
                  <form style="display: inline" method="POST" action={{route('video.deshabilitar', $video->id)}}>
                    {!! csrf_field() !!}
                    {!! method_field('DELETE') !!}
                    <button class="btn btn-danger btn-sm">Deshabilitar</button>
                  </form>
                </td>
              @else
                <td align="center">
                  <form style="display: inline" method="POST" action={{route('video.habilitar', $video->id)}}>
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

@stop