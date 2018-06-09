@extends('layoutuser')

@section('contenido')

  <div style="text-align:center;" align="center" >
    <h1 >Nuevo Tipo de Noticia</h1>
    <br>
    @if(session()->has('info'))
      <h3>{{session('info')}}</h3>
    @else
        <div align="center">
          <form style="width: 50%;" method="POST" action="{{route('label.store')}}">
          
            {!!csrf_field()!!}
          
            <div class="row" >
          
              <div class="col-md-4">
                <label for="nombre" style="text-align:left;">
                  Nombre Tipo de Noticia:
                </label>
              </div>
                <div class="col-md-8"><input class="form-control" type="text" name="nombre" value="{{old('nombre')}}">
                  {!! $errors->first('nombre', '<span class="error">:message</span>') !!}</div>
              <br><br>
              <div class="col-md-4">
                <label for="url_publicidad" style="text-align:left;">
                  Color del Tipo de Noticia:
                </label>
              </div>
              <div class="col-md-8">
                <input class="form-control" type="text" name="color_etiqueta" value="{{old('color_etiqueta')}}">
                {!! $errors->first('color_etiqueta', '<span class="error">:message</span>') !!}
              </div>
                    <br><br>
              <div class="col-md-12"><input class="btn btn-primary" type="submit" value="Crear"></div>
            </div>
          
          </form>
        </div>
      
    @endif
  </div>
@stop