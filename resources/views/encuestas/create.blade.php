@extends('layoutuser')

@section('contenido')

  <div align="center">
  <h1 style="text-align:center;">Nueva Encuesta</h1>
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
          <br>
          <div class="row">
            <div class="col-md-12"><input class="btn btn-primary" type="submit" value="Crear Encuesta"></div>
          </div>
        
        </form>
      </div>

      <script type="text/javascript">
        function generarOpciones()
        {
          content = "";
          let numeroOpc = document.getElementById('numeroOpciones').value;
          let opciones = document.getElementById('Opciones');
          for (i = 1; i <= numeroOpc; i++) { 
            content += '<div class="col-md-4"><label for="fechaFin">Opción '+i+':</label></div>'+
            '<div class="col-md-8"><input class="form-control" type="text" name="Opcion'+i+'">{!! $errors->first('fechaFin', '<span class="error">:message</span>') !!}</div>'+
            '<br><br>';
          }
          opciones.innerHTML = content;
        }
      </script>

  @endif
  </div>

@stop