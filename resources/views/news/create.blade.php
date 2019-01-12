@extends('layoutuser')

@section('contenido')

  <div align="center">
  <h1 style="text-align:center;">Nueva Noticia</h1>
  <br>
  @if(session()->has('info'))
    <h3>{{session('info')}}</h3>
  @else
      <!--<form action="/file-upload"
        class="dropzone"
        id="my-awesome-dropzone">
      </form>-->

      <div align="center">
        <form method="POST"  style="width: 90%;" action="{{route('new.store')}}" enctype="multipart/form-data">
        
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
              <label for="nombreEditor" style="text-align:left;">
                Editor:
              </label>
            </div>
            <div class="col-md-3">  
              <select class="form-control" name="nombreEditor" required>
                <option value="">[Seleccion una opción]</option>
                @foreach($listUsers as $user)     
                    <option value="{{$user->id}}" {{old('nombreEditor') == $user->id ? 'selected':''}}>{{$user->name}} {{$user->lastName}}</option>
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
                <option value="">[Seleccion una opción]</option>
                @foreach($prioridades as $distribucion)     
                    <option value="{{$distribucion->id}}" {{old('distribucion') == $distribucion->id ? 'selected':''}}>{{$distribucion->name}}</option>
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
                <option value="">[Seleccion una opción]</option>
                @foreach($labels as $label)     
                    <option value="{{$label->id}}" {{old('label') == $label->id ? 'selected':''}} >{{$label->name}}</option>
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
              <select onchange="generarGaleria(this.value)" class="form-control" name="tipogaleria" required>
                <option value="">[Seleccion una opción]</option>
                @foreach($listTipoGaleria as $tipoGeleria)     
                    <option value="{{$tipoGeleria->id}}" {{old('tipogaleria') == $tipoGeleria->id ? 'selected':''}}>{{$tipoGeleria->name}}</option>
                @endforeach
              </select>
              {!! $errors->first('tipogaleria', '<span class="error">:message</span>') !!}
            </div>

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
              <label for="palabrasclave" style="text-align:left;">
                Palabras clave:
              </label>
            </div>
              <div class="col-md-9">
                <input class="form-control" type="text" name="resumen" value="{{old('palabrasclave')}}">
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

            <!--Galeria-->
            <br><br>

          <!--Galeria-->

          <!--Imagen diferente, video, audio, u otro iframe-->
          <div class="col-md-12" style="margin-bottom: 10px">
            <div class="row" id="galeria">
              
            </div>
          </div>


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
          <br>
          <div class="row">
            <div class="col-md-12"><input class="btn btn-primary" type="submit" value="Crear Noticia"></div>
          </div>
          <br><br>
        
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

       <script type="text/javascript">
        function generarOpciones()
        {
          content = "";
          let numeroOpc = document.getElementById('numeroOpciones').value;
          let opciones = document.getElementById('Opciones');
          for (i = 1; i <= numeroOpc; i++) { 
            content += '<div class="col-md-3"><label for="fechaFin">Fuente '+i+':</label></div>'+
            '<div class="col-md-9" style="margin-bottom:10px;"><textarea rows="3" class="form-control" type="text" name="fuenteFrame'+i+'" id="fuenteFrame'+i+'"></textarea>{!! $errors->first('fechaFin', '<span class="error">:message</span>') !!}</div>'+
            '<br><br>';
          }
          opciones.innerHTML = content;
        }

        function visualizarCarousel()
        {
          //Visualizacion carousel
          content = "";
          let numeroOpc = document.getElementById('numeroOpciones').value;
          let opciones = document.getElementById('vcarousel');
          for (i = 1; i <= numeroOpc; i++) { 
            let im = document.getElementById('fuenteFrame'+i).value;
            if(i == 1)
            {
              if(im[0] == 'h')
                content += '<div class="carousel-item active"><figure class="img-responsive-carousel"><img class="d-block" src="'+im+'" alt="First slide"></figure></div>';
              else
                content+='<div class="carousel-item active"><div class="video-responsive">'+im+'</div></div>';
            }
            else
            {
              if(im[0] == 'h')
                content += '<div class="carousel-item"><figure class="img-responsive-carousel"><img class="d-block" src="'+im+'" alt="First slide"></figure></div>';
              else
                content+='<div class="carousel-item"><div class="video-responsive">'+im+'</div></div>';
            }
          }
          opciones.innerHTML = "";
          opciones.innerHTML += content;

          //Visualizacion Indicators
          let indicators = document.getElementById('vcarousel-indicators');
          contentIndicators="";
          for (i = 1; i <= numeroOpc; i++) { 
            let im = document.getElementById('fuenteFrame'+i).value;
            if(i == 1)
            {
              contentIndicators += '<li data-target="#carousel-1" data-slide-to="'+i+'" class="active"></li>';
            }
            else
            {
              contentIndicators += '<li data-target="#carousel-1" data-slide-to="'+i+'"></li>';
            }
          }
          indicators.innerHTML = contentIndicators;


          let controlprevnext = document.getElementById('control-prev-next');
          contentControlprevnext = '<a class="carousel-control-prev" href="#carousel-1" role="button" data-slide="prev"><div class="carousel-control-prev-style"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="sr-only">Previous</span></div></a></div><div><a class="carousel-control-next" href="#carousel-1" role="button" data-slide="next"><div class="carousel-control-next-style"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="sr-only">Next</span></div></a>';

          controlprevnext.innerHTML = contentControlprevnext;
        }

        function generarGaleria(option)
        {
          let galeria = document.getElementById('galeria');
          galeria.innerHTML = option;

          content="";

          if(option > 2)
          {
            content='<div class="col-md-3"><label for="">Imagen/Video/Audio</label></div><div class="col-md-9" style="margin-bottom:10px;"><textarea rows="10" class="form-control"  name="contenidoIMA">{{old('contenidoIMA')}}</textarea></div>';
          }
          else
            if(option == 2)
            {
              content='<div class="col-md-3"><label for="label" style="text-align:left;">Número de Fuentes:</label></div><div class="col-md-3"><select class="form-control" name="numeroOpciones" Id="numeroOpciones">@for ($i = 2; $i <= 20; $i++)<option value="{{$i}}">{{ $i }}</option>@endfor  </select></div><div class="col-md-3"><div class="btn btn-primary" onclick="generarOpciones()">Generar</div></div><br><br>              <div class="col-md-3"><div class="btn btn-success" onclick="visualizarCarousel()">Visualizar</div></div><div class="col-md-12" style="margin-bottom: 10px"><div class="row" Id="Opciones"></div></div><div class="col-md-3"></div><div class="col-md-9" style="margin-bottom: 10px"><div class="carousel slide" id="carousel-1" data-ride="carousel" data-interval="false"><ol class="carousel-indicators" id="vcarousel-indicators"></ol><div class="carousel-inner" Id="vcarousel" style="background-color: black;"></div></div><div id="control-prev-next"></div></div>';
            }

          galeria.innerHTML = content;

          CKEDITOR.config.height = 400;
          CKEDITOR.config.width = 'auto';
          CKEDITOR.replace('contenidoIMA');

        }

      </script>
  @endif
  </div>

@stop