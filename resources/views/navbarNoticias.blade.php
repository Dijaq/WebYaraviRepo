	<div class="row">			
		<div class="col-md-12">
			<img src={{asset('storage/PortadaYaravi.jpg')}} style="width:100%;" alt="Radio Yaravi" />
		</div>
	</div>

	<nav class="navbar navbar-expand-sm navbar-light  nav-yaravi" style="padding-top: 2px; padding-bottom: 2px; padding-right: 8px;" role="navigation">
		<div class="container-fluid">
			<div class="nav-item" style="border-right: solid 1px #D8D8D8;  font-weight: bold; font-size: 17px; height: 40px;" class="active"><a class="nav-link nav-link-c" href={{route('home')}} style="">Principal</a></div>
			<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navegacion_fm_n" aria-controls="navegacion_fm_n" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon" style="color: black;"></span>
			</button>
			<div class="collapse navbar-collapse" id="navegacion_fm_n">
				<ul class="navbar-nav">
					@foreach($labels as $label)
						<li class="nav-item" style="border-right: solid 1px #D8D8D8; font-weight: bold; font-size: 17px; "><a class="nav-link nav-link-c" style="color: white" href={{route('classified.show', $label->id)}}>{{$label->name}}</a></li>
					@endforeach
					<li class="nav-item" style="border-right: solid 1px #D8D8D8; font-weight: bold; font-size: 17px; "><a class="nav-link nav-link-c" style="color: white" href={{route('planesdegobierno2018.index')}}>Elecciones 2018</a></li>
					<li class="nav-item" style="border-right: solid 1px #D8D8D8; font-weight: bold; font-size: 17px; "><a class="nav-link nav-link-c" style="color: white" href={{route('galeriavideos.index')}}>Videos</a></li>
				</ul>
			</div>
		</div>
	</nav>

	<div class="carousel slide" id="carousel-1" data-ride="carousel">

		<div class="carousel-inner">
			@foreach($publicidadesPrincipal as $key => $publicidad)	
				<div class="carousel-item item{{ $key == 0 ? ' active' : '' }}" style="margin-bottom: 10px;">
					<a href="{{$publicidad->url_page}}" target="_blank"><img src="{{Storage::url($publicidad->dir_image)}}" alt="" class="img-responsive" style="width:100%;"></a>
				</div>
			@endforeach
		</div>
	</div>