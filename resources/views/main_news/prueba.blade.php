@extends('layoutuser')

@section('contenido')

  <div align="center">
  <h1 style="text-align:center;">PRUEBA</h1>
  <br>
  @if(session()->has('info'))
    <h3>{{session('info')}}</h3>
  @else

      <div align="center">
        <form method="POST"  style="width: 80%;" action="{{route('encuesta.store')}}">
        
          {!!csrf_field()!!}
        
          <div class="row">
        
            <div class="col-md-4">
              <label for="name" style="text-align:left;">
                Nombre de Encuesta: 
              </label>
            </div>
            <div class="col-md-8"><input class="form-control" type="text" name="name" value="{{old('name')}}">
                {!! $errors->first('name', '<span class="error">:message</span>') !!}</div>
            <br><br>
            <div class="col-md-4">
              <label for="fechaInicio">
                Fecha Inicio de Encuesta:
              </label>
            </div>
            <div class="col-md-8">
              <input class="form-control" type="date" name="fechaInicio" value="{{old('fechaInicio')}}">
              {!! $errors->first('fechaInicio', '<span class="error">:message</span>') !!}
            </div>
            <br><br>
            <div class="col-md-4">
              <label for="fechaFin">
                Fecha Fin de Encuesta:
            </label>
            </div>
            <div class="col-md-8">
              <input class="form-control" type="date" name="fechaFin" value="{{old('fechaFin')}}">
              {!! $errors->first('fechaFin', '<span class="error">:message</span>') !!}
            </div>
            <br><br>
            
            <div class="col-md-4">
              <label for="label" style="text-align:left;">
                Número de Opciones:
              </label>
            </div>
            <div class="col-md-4">
              <select class="form-control" name="numeroOpciones" Id="numeroOpciones">
                @for ($i = 2; $i <= 20; $i++)
                    <option value="{{$i}}">{{ $i }}</option>
                @endfor
              </select>
            </div>
            <div class="col-md-4">
              <div class="btn btn-primary" onclick="generarOpciones()">Generar</div>
            </div>
            <br><br>
          </div>
          <div class="row" Id="Opciones">
          </div>
          <div class="col-md-4">
            <div class="btn btn-primary" onclick="visualizarCarousel()">Visualizar</div>
          </div>
          <br>

          <div class="col-md-12">
            <div class="carousel slide" id="carousel-1" data-ride="carousel" data-interval="false">
              <div class="carousel-inner" Id="vcarousel" style="background-color: black;">
                <!--<div class="carousel-item active">
                  <img class="d-block w-100" src="http://www.radioyaravi.org.pe/storage/news/Fiscalia-20181503.jpg" alt="First slide">
                </div>-->
              </div>
            
              <a class="carousel-control-prev" href="#carousel-1" role="button" data-slide="prev">
                <div style="padding: 7px; padding-bottom: 2px; position: absolute; left: 1px; background-color: rgba(42,122,202,0.7);">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </div>
              </a>
              <a class="carousel-control-next" href="#carousel-1" role="button" data-slide="next">
                <div style="padding: 7px; padding-bottom: 2px; position: absolute; right: 1px; background-color: rgba(42,122,202,0.7);">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                </div>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>

          <br>
          <div class="row">
            <div class="col-md-12"><input class="btn btn-primary" type="submit" value="Crear Encuesta"></div>
          </div>
          <br>
        
        </form>
      </div> 
      <script type="text/javascript">
        function generarOpciones()
        {
          content = "";
          let numeroOpc = document.getElementById('numeroOpciones').value;
          let opciones = document.getElementById('Opciones');
          for (i = 1; i <= numeroOpc; i++) { 
            content += '<div class="col-md-4"><label for="fechaFin">Fuente '+i+':</label></div>'+
            '<div class="col-md-8"><textarea rows="3" class="form-control" type="text" name="Opcion'+i+'" id="Opcion'+i+'"></textarea>{!! $errors->first('fechaFin', '<span class="error">:message</span>') !!}</div>'+
            '<br><br>';
          }
          opciones.innerHTML = content;
        }

        function visualizarCarousel()
        {

          content = "";
          let numeroOpc = document.getElementById('numeroOpciones').value;
          let opciones = document.getElementById('vcarousel');
          for (i = 1; i <= numeroOpc; i++) { 
            let im = document.getElementById('Opcion'+i).value;
            if(i == 1)
            {
              if(im[0] == 'h')
                content += '<div class="carousel-item active"><figure class="img-responsive"><img class="d-block" src="'+im+'" alt="First slide"></figure></div>';
              else
                content+='<div class="carousel-item active"><div class="video-responsive">'+im+'</div></div>';
            }
            else
            {
              if(im[0] == 'h')
                content += '<div class="carousel-item"><figure class="img-responsive"><img class="d-block" src="'+im+'" alt="First slide"></figure></div>';
              else
                content+='<div class="carousel-item"><div class="video-responsive">'+im+'</div></div>';
            }
          }
          opciones.innerHTML = "";
          opciones.innerHTML += content;
        }
      </script>

  @endif
  </div>

@stop

