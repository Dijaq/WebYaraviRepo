@extends('layoutuser')

@section('contenido')

  <h1>Usuarios</h1>
  <!--<a href="tel:+959992048">959992048</a>-->
  <a href="https://wa.me/+51959992048">959992048</a>
  <!--<a class="btn btn-primary" href="{{route('user.create')}}" style="float: right;">Crear Usuario</a>-->
  <br><br>
	<table class="table table-striped">
    <thead>
      <tr>
        <th>Nombres</th>
        <th>Apellidos</th>
        <th>Email</th>
        <th>Role</th>
        <th>Acciones</th>
      </tr>
    </thead>
    <tbody>
      @foreach($users as $user)
        <tr>
          <td>{{$user->name}}</td>
          <td>{{$user->lastName}}</td>
          <td>{{$user->email}}</td>
          <td>{{$user->role->displayName}}</td>
          @if($user->estado == 2)
            <td align="center">
              <a class="btn btn-info btn-sm" href="{{route('user.edit', $user->id)}}">Editar</a>
              <a class="btn btn-primary btn-sm" href="{{route('user.newpassword', $user->id)}}">Cambiar Contraseña</a>
              <form style="display: inline" method="POST" action={{route('user.deshabilitar', $user->id)}}>
                {!! csrf_field() !!}
                {!! method_field('DELETE') !!}
                <button class="btn btn-danger btn-sm">Deshabilitar</button>
              </form>
            </td>
          @else
            <td align="center">
              <form style="display: inline" method="POST" action={{route('user.habilitar', $user->id)}}>
                {!! csrf_field() !!}
                {!! method_field('DELETE') !!}
                <button class="btn btn-danger btn-sm">Habilitar</button>
              </form>
            </td>
          @endif
          <!--<td>
            <a class="btn btn-info btn-sm" href="{{route('user.edit', $user->id)}}">Editar</a>
            <button class="btn btn-danger btn-sm">Deshabilitar</button>
          </td>-->
        </tr>
      @endforeach
    </tbody>
  </table>

@stop