@extends('layoutuser')

@section('contenido')

  <div style="text-align:center; width: 60%" >
  <h1>Editar Usuario</h1>
  <br>
  @if(session()->has('info'))
    <h3>{{session('info')}}</h3>
      <form method="POST" action="{{route('user.update', $user->id)}}">

        {!! method_field('PUT') !!}
  @else

      
        {!!csrf_field()!!}
      
        <div class="row">
          <div class="col-md-4">
              <label for="nombre">
                Nombres: 
              </label>
          </div>
          <div class="col-md-8"><input class="form-control" type="text" name="nombres" value="{{$user->name}}">
            {!! $errors->first('nombre', '<span class="error">:message</span>') !!}</div>
          <br><br>
          <div class="col-md-4">
              <label for="nombre">
                Apellidos: 
              </label>
          </div>
          <div class="col-md-8"><input class="form-control" type="text" name="apellidos" value="{{$user->lastName}}">
            {!! $errors->first('nombre', '<span class="error">:message</span>') !!}</div>
          <br><br>
          <div class="col-md-4">
            <label for="email">
              Correo Electrónico:
            </label>
          </div>
          <div class="col-md-8">
              <input class="form-control" type="text" name="email" value="{{$user->email}}">
              {!! $errors->first('email', '<span class="error">:message</span>') !!}
          </div>
                <br><br>
          <div class="col-md-4">
            <label for="color_etiqueta">
              Rol:
            </label>
          </div>
          <div class="col-md-8">  
            <select class="form-control" name="role">
              @foreach($roles as $role)
                @if($user->idRole === $role->id)
                  <option value="{{$role->id}}" selected>{{$role->displayName}}</option>
                @else
                  <option value="{{$role->id}}">{{$role->displayName}}</option>
                @endif
              @endforeach
            </select>
          </div>
          <br><br>
          
          <div class="col-md-12"><input class="btn btn-primary" type="submit" value="Editar"></div>
        </div>
      
      </form>
    </div>
  @endif

@stop