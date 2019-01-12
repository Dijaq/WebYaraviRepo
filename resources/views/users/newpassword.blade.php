@extends('layoutuser')

@section('contenido')

  <div style="text-align:center; width: 60%" >
  <h1>Editar Usuario</h1>
  <br>
  @if(session()->has('info'))
    <h3>{{session('info')}}</h3>
  @else

      <form method="POST" action="{{route('user.updatepassword', $user->id)}}">

        {!! method_field('PUT') !!}
      
        {!!csrf_field()!!}
      
        <div class="row">
          <div class="col-md-4">
              <label for="nombre">
                Nueva contraseña: 
              </label>
          </div>
          <div class="col-md-8"><input class="form-control" type="password" name="password">
            {!! $errors->first('nombre', '<span class="error">:message</span>') !!}</div>
          <br><br>
          <div class="col-md-4">
              <label for="nombre">
                Repita la nueva contraseña: 
              </label>
          </div>
          <div class="col-md-8"><input class="form-control" type="password" name="comparepassword">
            {!! $errors->first('nombre', '<span class="error">:message</span>') !!}</div>
          <br><br>
          <div class="col-md-4">
            <label for="email">
              Ingrese su contraseña actual:
            </label>
          </div>
          <div class="col-md-8">
              <input class="form-control" type="password" name="lastpassword">
              {!! $errors->first('email', '<span class="error">:message</span>') !!}
          </div>
                <br><br>
                    
          <div class="col-md-12"><input class="btn btn-primary" type="submit" value="Editar"></div>
        </div>
      
      </form>
    </div>
  @endif

@stop