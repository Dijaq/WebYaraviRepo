	<div class="row">			
		<div class="col-md-12">
			<img src={{asset('storage/PortadaYaravi.jpg')}} style="width:100%;" alt="Radio Yaravi" />
		</div>
	</div>

	<nav class="navbar navbar-expand-sm" role="navigation" style="background: #537CD5; height: 40px; margin-bottom: 5px; margin-top: 4px;">
		<div class="container">
			<div class="nav-item" style="border-right: solid 1px #D8D8D8;  font-weight: bold; font-size: 17px;" class="active"><a class="nav-link nav-link-c" href={{route('home')}}>Principal</a></div>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navegacion_fm" aria-controls="navegacion_fm" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navegacion_fm">
				<ul class="navbar-nav">
					<li class="nav-item" style="border-right: solid 1px #D8D8D8;  font-weight: bold; font-size: 17px;" class="active"><a class="nav-link nav-link-c" href={{route('home')}}>Principal</a></li>
					@foreach($labels as $label)
						<li class="nav-item" style="border-right: solid 1px #D8D8D8; font-weight: bold; font-size: 17px; "><a class="nav-link nav-link-c" href={{route('classified.show', $label->id)}}>{{$label->name}}</a></li>
					@endforeach
				</ul>
			</div>
		</div>
	</nav>