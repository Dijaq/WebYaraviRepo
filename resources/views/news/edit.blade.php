@extends('layoutuser')

@section('contenido')

  <div align="center">
  <h1 style="text-align:center;">Editar Noticia</h1>
  <br>
  @if(session()->has('info'))
    <h3>{{session('info')}}</h3>
  @else
      <!--<form action="/file-upload"
        class="dropzone"
        id="my-awesome-dropzone">
      </form>-->

      <div align="center">
        <form method="POST"  style="width: 90%;" action="{{route('new.update', $new->id)}}" enctype="multipart/form-data">

          {!! method_field('PUT') !!}
        
          {!!csrf_field()!!}
        
          <div class="row">
        
            <div class="col-md-3">
              <label for="titulo" style="text-align:left;">
                Titulo: 
              </label>
            </div>
              <div class="col-md-9"><input class="form-control" type="text" name="titulo" value="{{$new->title}}">
                {!! $errors->first('titulo', '<span class="error">:message</span>') !!}</div>
            <br><br>
            
            <div class="col-md-3">
              <label for="nombreEditor" style="text-align:left;">
                Editor:
              </label>
            </div>
            <div class="col-md-3">  
              <select class="form-control" name="nombreEditor" required>
                @foreach($listUsers as $user) 
                  @if($new->nameEditor === $user->name.' '.$user->lastName)       
                    <option value="{{$user->name}} {{$user->lastName}}" selected="selected">{{$user->name}} {{$user->lastName}}</option>
                  @else
                     <option value="{{$user->name}} {{$user->lastName}}">{{$user->name}} {{$user->lastName}}</option>
                  @endif
                @endforeach
              </select>
            </div>

            <div class="col-md-3">
              <label for="distribucion" style="text-align:left;">
                Distribución:
              </label>
            </div>
            <div class="col-md-3">  
              <select class="form-control" name="distribucion" required>
                @foreach($prioridades as $prioridad) 
                  @if($new->idPrioridad == $prioridad->id)    
                    <option value="{{$prioridad->id}}" selected="selected">{{$prioridad->name}}</option>
                  @else
                     <option value="{{$prioridad->id}}">{{$prioridad->name}}</option>
                  @endif
                @endforeach
              </select>
            </div>
            <br><br>

            <div class="col-md-3">
              <label for="label" style="text-align:left;">
                Tipo de noticia:
              </label>
            </div>
            <div class="col-md-3">  
              <select class="form-control" name="label" required>
                @foreach($labels as $label)     
                  @if($new->idLabelNews == $label->id)    
                    <option value="{{$label->id}}" selected="selected">{{$label->name}}</option>
                  @else
                     <option value="{{$label->id}}">{{$label->name}}</option>
                  @endif
                @endforeach
              </select>
            </div>
            <br><br>

            <div class="col-md-3">
              <label for="tipogaleria" style="text-align:left;">
                Video/Imagen/Audio:
              </label>
            </div>
            <div class="col-md-3">  
              <select class="form-control" name="tipogaleria" required>
                @foreach($listTipoGaleria as $tipoGeleria)     
                  @if($new->idTipoGaleria == $tipoGeleria->id)    
                    <option value="{{$tipoGeleria->id}}" selected="selected">{{$tipoGeleria->name}}</option>
                  @else
                     <option value="{{$tipoGeleria->id}}">{{$tipoGeleria->name}}</option>
                  @endif
                @endforeach
              </select>
            </div>

            <br><br>
            <div class="col-md-3">
              <label for="resumen" style="text-align:left;">
                Bajada:
              </label>
            </div>
              <div class="col-md-9">
                <input class="form-control" type="text" name="resumen" value="{{$new->summary}}">
                {!! $errors->first('resumen', '<span class="error">:message</span>') !!}
              </div>
            <br><br>
            <!--<div class="col-md-3">
              <label for="dir_imagen" style="text-align:left;">
                Directorio de la imagen:
              </label>
            </div>
            <div class="col-md-9">
                <input class="form-control" type="text" name="dir_image" value="{{$new->dir_image}}">
                {!! $errors->first('dir_image', '<span class="error">:message</span>') !!}
                  <br>
            </div>-->

             <div class="col-md-3">
              <label for="palabrasclave" style="text-align:left;">
                Palabras clave:
              </label>
            </div>
              <div class="col-md-9">
                <input class="form-control" type="text" name="resumen" value="{{$new->keywords}}">
                {!! $errors->first('resumen', '<span class="error">:message</span>') !!}
              </div>
            <br><br>

            <div class="col-md-3">
              <label for="dir_image">
                Imagen de Portada:
              </label>
            </div>
            <div class="col-md-9">
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="validatedCustomFile" name="dir_image">
                  <label class="custom-file-label" for="validatedCustomFile">Elige una imagen</label>
                  <div class="invalid-feedback">Example invalid custom file feedback</div>
                  {!! $errors->first('dir_image', '<span class="error">:message</span>') !!}
                </div>
            </div> 

            <br><br>


            <div class="col-md-3">
              <label for="contenido" style="text-align:left;">
                Contenido:
              </label>
            </div>
            <div class="col-md-9">
                <textarea rows="15" class="form-control"  name="contenido">{{$new->contentnews->content}}  
                </textarea>
                {!! $errors->first('contenido', '<span class="error">:message</span>') !!}
            </div> 
            
          </div>
          <div class="row">
            <div class="col-md-12"><input class="btn btn-primary" type="submit" value="Editar Noticia"></div>
          </div>
        
        </form>
      </div>

      <script src={{asset('ckeditor/ckeditor.js')}}></script>
      <script>
        CKEDITOR.config.height = 600;
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