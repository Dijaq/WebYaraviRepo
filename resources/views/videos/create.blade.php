@extends('layoutuser')

@section('contenido')

  <div align="center">
  <h1 style="text-align:center;">Nuevo Video</h1>
  <br>
  @if(session()->has('info'))
    <h3>{{session('info')}}</h3>
  @else
      <!--<form action="/file-upload"
        class="dropzone"
        id="my-awesome-dropzone">
      </form>-->

      <div align="center">
        <form method="POST"  style="width: 90%;" action="{{route('video.store')}}" enctype="multipart/form-data">
        
          {!!csrf_field()!!}
        
          <div class="row">

            <div class="col-md-3">
              <label for="titulo" style="text-align:left;">
                Titulo: 
              </label>
            </div>
              <div class="col-md-9"><input class="form-control" type="text" name="titulo" value="{{old('titulo')}}">
                {!! $errors->first('titulo', '<span class="error">:message</span>') !!}</div>
            <br><br>

            <div class="col-md-3">
              <label for="distribucion" style="text-align:left;">
                Distribución:
              </label>
            </div>
            <div class="col-md-9">  
              <select class="form-control" name="distribucion" required>
                <option value="">[Seleccione una opción]</option>
                @foreach($prioridades as $distribucion)     
                    <option value="{{$distribucion->id}}" {{old('distribucion') == $distribucion->id ? 'selected':''}}>{{$distribucion->name}}</option>
                @endforeach
              </select>
            </div>
            <br><br>

            <div class="col-md-3">
              <label for="distribucion" style="text-align:left;">
                Tipo:
              </label>
            </div>

            <div class="col-md-9">  
              <select class="form-control" name="tipo" required>
                <option value="">[Seleccione una opción]</option>
                @foreach($tipos as $tipo)     
                    <option value="{{$tipo['id']}}" {{old('distribucion') == $tipo['id'] ? 'selected':''}}>{{$tipo['nombre']}}</option>
                @endforeach
              </select>
            </div>
            <br><br>

            <div class="col-md-3">
              <label for="contenido" style="text-align:left;">
                Contenido:
              </label>
            </div>
            <div class="col-md-9">
                <textarea rows="8" class="form-control"  name="contenido">{{old('contenido')}}  
                </textarea>
                {!! $errors->first('contenido', '<span class="error">:message</span>') !!}
            </div> 
            
          </div>
          <br>
          <div class="row">
            <div class="col-md-12"><input class="btn btn-primary" type="submit" value="Crear Video"></div>
          </div>
          <br><br>
        
        </form>
      </div>

      <script src={{asset('ckeditor/ckeditor.js')}}></script>
      <script>
        CKEDITOR.config.height = 450;
        CKEDITOR.config.width = 'auto';
        CKEDITOR.replace('contenido');
      </script>
      <script>
        Dropzone.options.myAwesomeDropzone = {
          paramName: "file", // Las imágenes se van a usar bajo este nombre de parámetro
          maxFilesize: 2 // Tamaño máximo en MB
        };
      </script>
  @endif
  </div>

@stop