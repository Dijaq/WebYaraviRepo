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
            <th>Title</th>
            <th style="text-align: center">Acciones</th>
          </tr>
        </thead>
        <tbody>
          @foreach($videos as $video)
            <tr>  
                <td>{{$video->id}}</td>
                <td>{{$video->title}}</td>
                <td><div width="20px" style="background-color: {{$video->color}}">{{$video->color}}</div>
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