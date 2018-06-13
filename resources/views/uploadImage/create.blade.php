@extends('layoutuser')

@section('contenido')

  <div style="text-align:center;">
    <h1>Nueva Imagen</h1>
    <br>
    @if(session()->has('info'))
      <h3>{{session('info')}}</h3>
    @else

       <div align="center">
          <form method="POST" style="width: 80%;" action="{{route('imagen.store')}}" enctype="multipart/form-data">
         
           {!!csrf_field()!!}
         
           <div class="row">

              <div class="col-md-4">
                <label for="dir_image">
                  Imagen:
                </label>
              </div>
              <div class="col-md-8">
                 <div class="custom-file">
                    <input type="file" class="custom-file-input" id="validatedCustomFile" name="dir_image">
                    <label class="custom-file-label" for="validatedCustomFile">Elige una imagen</label>
                    <div class="invalid-feedback">Example invalid custom file feedback</div>
                    {!! $errors->first('dir_image', '<span class="error">:message</span>') !!}
                  </div>
              </div> 

              <br><br>
             <div class="col-md-12"><input class="btn btn-primary" type="submit" value="Cargar Imagen"></div>
           </div>
         
         </form>
       </div>
    @endif
  </div>

@stop