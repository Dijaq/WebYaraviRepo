	<div class="row">			
		<div class="col-md-12">
			<img src={{asset('storage/PortadaYaraviJulio2020_V2.png')}} style="width:100%;" alt="Radio Yaravi" />
		</div>
	</div>

	<nav class="navbar navbar-expand-lg navbar-expand-lg navbar-light nav-yaravi bd-links" style="padding: 0px;" role="navigation">
		<div class="container-fluid" style="padding: 0px;">
			<!--<div class="nav-item" style="border-right: solid 1px #D8D8D8;  font-weight: bold; font-size: 17px;" class="active"><a style="padding: 0px;" class="nav-link nav-link-c" href={{route('home')}} style="">Principal</a></div>
			<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navegacion_fm_n" aria-controls="navegacion_fm_n" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon" style="color: black;"></span>
			</button>-->
			<div class="collapse navbar-collapse" id="navegacion_fm_n">
				<ul class="navbar-nav">
					<li class="nav-item" style="border-right: solid 1px #D8D8D8; font-weight: bold; font-size: 17px; "><a class="nav-link nav-link-c" style="color: white" href={{route('home')}}>Principal</a></li>

					@foreach($labels as $label)
						<li class="nav-item" style="border-right: solid 1px #D8D8D8; font-weight: bold; font-size: 17px; "><a class="nav-link nav-link-c" style="color: white;" href={{route('classified.show', $label->id)}}>{{$label->name}}</a></li>
					@endforeach
					<!--<li class="nav-item" style="border-right: solid 1px #D8D8D8; font-weight: bold; font-size: 17px; "><a class="nav-link nav-link-c" style="color: white" href={{route('planesdegobierno2018.index')}}>Elecciones 2018</a></li>-->
					<li class="nav-item" style="border-right: solid 1px #D8D8D8; font-weight: bold; font-size: 17px; "><a class="nav-link nav-link-c" style="color: white" href={{route('nuestroHeroes.index')}}>Nuestros Héroes</a></li>
				</ul>
			</div>
		</div>
	</nav>

	<div class="carousel slide" id="carousel-1" data-ride="carousel">
		
		<div id='gpt_top' style="margin-bottom: 10px; ">
			<!--<script>
				googletag.cmd.push(function() { googletag.display('gpt_top'); });
			</script>-->
			
			<!--<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
			<ins class="adsbygoogle"
				style="display:block"
				data-ad-client="ca-pub-8047009650931790"
				data-ad-slot="6469966009"
				data-ad-format="auto"
				data-full-width-responsive="true"></ins>
			<script>
				(adsbygoogle = window.adsbygoogle || []).push({});
			</script>-->

			<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
			<!-- yaravi_top -->
			<ins class="adsbygoogle"
				style="display:inline-block;width:970px;height:150px"
				data-ad-client="ca-pub-8047009650931790"
				data-ad-slot="6469966009"></ins>
			<script>
				(adsbygoogle = window.adsbygoogle || []).push({});
			</script>

		</div>
		<!--<div class="carousel-inner">
			@foreach($publicidadesPrincipal as $key => $publicidad)	
				<div class="carousel-item item{{ $key == 0 ? ' active' : '' }}" style="margin-bottom: 10px;">
					<a href="{{$publicidad->url_page}}" target="_blank"><img src="{{Storage::url($publicidad->dir_image)}}" alt="" class="img-responsive" style="width:100%;"></a>
				</div>
			@endforeach
		</div>-->
	</div>
