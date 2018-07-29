	<nav class="navbar navbar-expand-sm" role="navigation" style="background: #081377;">
			<!--<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navegacion_fmYaravi" aria-controls="navegacion_fmYaravi" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon"></span>
			</button>-->

		<div class="container">				
			<div class="collapse navbar-collapse" id="navegacion_fmYaravi">
				<ul class="navbar-nav" style="font-weight: bold; font-size: 17px;">
					<!--<li class="nav-item" class="active"><a class="nav-link nav-link-c" href="#">Nosotros</a></li>-->

					<li class="nav-item dropdown show">
				        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" style="color: white;">
				          Nosotros
				        </a>
				        <div class="dropdown-menu" aria-labelledby="navbarDropdown1">
				          <a class="dropdown-item" href={{route('nosotros.quienessomos')}}>Quienes Somos</a>
				          <a class="dropdown-item" href={{route('nosotros.historia')}}>Historia</a>
				          <a class="dropdown-item" href={{route('nosotros.equipotrabajo')}}>Equipo de Trabajo</a>
				        </div>
				      </li>
					
					<li class="nav-item"><a class="nav-link nav-link-c" href={{route('servicios.index')}}>Servicios</a></li>
					<li class="nav-item"><a class="nav-link nav-link-c" href={{route('programacion.index')}}>Programación</a></li>
					<li class="nav-item"><a class="nav-link nav-link-c" href={{route('amakella.index')}}>Ama Kella</a></li>
				</ul>
			</div>
			
			<div class="col-md-3" align="right" style="position: relative;">
				<div class="row">
					<div class="col-md-2"></div>
					<div class="col-md-7"  align="left" style="color: white; font-weight: bold;">
						En vivo ahora<br>	
						106.3FM - 930AM
					</div>
					<div class="play_en_vivo" align="right"  style="position: absolute; right: 20px; top: 0px;">
						<a href="{{route('audioenvivo.index')}}" target="_blank"><img height="50px" src="{{asset('storage/Playv7.gif')}}" alt=""></a>
					</div>
				</div>
			</div>			
		</div>

		<!--<script>
			function presionar()
			{
				setTimeout(function(){
					let audio = document.getElementById("myAudio");
					audio.autoplay = true;
					audio.load();
				},5000);
			}

		</script>-->
	</nav>