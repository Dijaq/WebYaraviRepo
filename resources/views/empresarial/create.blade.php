@extends('layoutuser')

@section('contenido')

  <div align="center">
  <h1 style="text-align:center;">Nueva Empresarial</h1>
  <br>
  @if(session()->has('info'))
    <h3>{{session('info')}}</h3>
  @else
      <!--<form action="/file-upload"
        class="dropzone"
        id="my-awesome-dropzone">
      </form>-->

      <div align="center">
        <form method="POST"  style="width: 90%;" action="{{route('empresarial.store')}}" enctype="multipart/form-data">
        
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
              <label for="resumen" style="text-align:left;">
                Bajada:
              </label>
            </div>
            <div class="col-md-9">
              <input class="form-control" type="text" name="resumen" value="{{old('resumen')}}">
              {!! $errors->first('resumen', '<span class="error">:message</span>') !!}
            </div>
                <br><br>

            <div class="col-md-3">
              <label for="nombreEditor" style="text-align:left;">
                Editor:
              </label>
            </div>
            <div class="col-md-3">  
              <select class="form-control" name="nombreEditor" required>
                <option value="">[Seleccion una opción]</option>
                @foreach($listUsers as $user)     
                    <option value="{{$user->name}}">{{$user->name}}</option>
                @endforeach
              </select>
            </div>

            <div class="col-md-3">
              <label for="tipogaleria" style="text-align:left;">
                Video/Imagen/Audio:
              </label>
            </div>
            <div class="col-md-3">  
              <select class="form-control" name="tipogaleria" required>
                <option value="">[Seleccion una opción]</option>
                @foreach($listTipoGaleria as $tipoGeleria)     
                    <option value="{{$tipoGeleria->id}}">{{$tipoGeleria->name}}</option>
                @endforeach
              </select>
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
                <textarea rows="15" class="form-control"  name="contenido">{{old('contenido')}}  
                </textarea>
                {!! $errors->first('contenido', '<span class="error">:message</span>') !!}
            </div> 
            
          </div>
          <div class="row">
            <div class="col-md-12"><input class="btn btn-primary" type="submit" value="Crear Noticia"></div>
          </div>
        
        </form>
      </div>

      <script src={{asset('ckeditor/ckeditor.js')}}></script>
      <script>
        CKEDITOR.config.height = 400;
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