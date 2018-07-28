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
        <form method="POST"  style="width: 90%;" action="{{route('video.update', $video->id)}}" enctype="multipart/form-data">
        
         {!! method_field('PUT') !!}
      
          {!!csrf_field()!!}
        
          <div class="row">

            <div class="col-md-3">
              <label for="titulo" style="text-align:left;">
                Titulo: 
              </label>
            </div>
              <div class="col-md-9"><input class="form-control" type="text" name="titulo" value="{{$video->title}}">
                {!! $errors->first('titulo', '<span class="error">:message</span>') !!}</div>
            <br><br>

            <div class="col-md-3">
              <label for="distribucion" style="text-align:left;">
                Distribución:
              </label>
            </div>
            <div class="col-md-9">  
              <select class="form-control" name="distribucion" required>
                @foreach($prioridades as $prioridad) 
                  @if($video->idPrioridad == $prioridad->id)    
                    <option value="{{$prioridad->id}}" selected="selected">{{$prioridad->name}}</option>
                  @else
                     <option value="{{$prioridad->id}}">{{$prioridad->name}}</option>
                  @endif
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
                <textarea rows="8" class="form-control"  name="contenido">{{old('contenido')}}  {{$video->embebedVideo}}
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