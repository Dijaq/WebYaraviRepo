<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <script src="{{asset('js/dropzone.js')}}"></script>
    <link rel="stylesheet" href="{{asset('css/dropzone.css')}}">

	<link rel="icon" href={{asset('storage/favicon.ico')}} type="image/x-icon" />
    <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.css">-->
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
	<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

	<title>Radio Yaraví</title>
</head>
<body>
	<nav class="navbar navbar-expand-sm" role="navigation" style="background: #5caceb;">
		<div class="container">
			<div class="collapse navbar-collapse" id="navegacion_fm">
				<ul class="navbar-nav">
					
					@if(auth()->guest())
						<li class="nav-item"><a class="nav-link" href="/login" style="color: #D8D8D8">Login</a></li>
					@endif
					@if(auth()->check())
						<li class="nav-item"><a class="nav-link nav-link-c" href="{{route('user.index')}}">Usuarios</a></li>
						<li class="nav-item" class="active"><a class="nav-link nav-link-c" href="{{route('label.index')}}">Etiquetas</a></li>
						<li class="nav-item"><a class="nav-link nav-link-c" href="{{route('publicity.index')}}">Publicidad</a></li>
						<li class="nav-item"><a class="nav-link nav-link-c" href="{{route('new.index')}}">Noticias</a></li>
						<li class="nav-item"><a class="nav-link nav-link-c" href={{route('empresarial.index')}}>Empresariales</a></li>
						<li class="nav-item"><a class="nav-link nav-link-c" href={{route('informeespecial.index')}}>InformeEspecial</a></li>
						<li class="nav-item"><a class="nav-link nav-link-c" href={{route('encuesta.index')}}>Encuestas</a></li>
						<li class="nav-item"><a class="nav-link nav-link-c" href={{route('video.index')}}>Videos</a></li>
						<li class="nav-item"><a class="nav-link nav-link-c" href={{route('imagen.index')}}>Galeria Imágenes</a></li>
						<li class="nav-item"><a class="nav-link" href="/logout" style="color: #D8D8D8">Cerrar Sesion de {{auth()->user()->email}}</a></li>
					@endif					
				</ul>
			</div>
		
		</div>
	</nav>
	<div class="container">
		<br>
		@yield('contenido')
	</div>
</body>
</html>