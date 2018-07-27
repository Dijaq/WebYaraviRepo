@extends('layoutuser')

@section('contenido')

  <h1>Imágenes</h1>
  <a class="btn btn-primary" href="{{route('imagen.create')}}" style="float: right;">Crear Imagen</a>
  <br><br>

  <div class="row">
    @foreach($imagenes as $imagen)
      <div class="col-md-8" style="border: solid 1px; padding: 5px;">{{$urlServidor}}{{$imagen->dirImage}}</div>
      <div class="col-md-4" style="border: solid 1px; padding: 5px;"><img src="{{$imagen->dirImage}}" width="100%" alt=""></div>    
    @endforeach
  </div>

	

@stop