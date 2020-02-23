<!--<div class="col-md-12">
	<div class="empresarial_etiqueta" style="border-radius: 10px 30px; text-align: center; font-size: 25px;">
		<strong><a style="color: white" href={{route('nota.classifiedcampanias')}}>Campañas</a></strong>
	</div>
	<br>
	<div class="carousel slide" id="carousel-i" data-ride="carousel">
		<div class="carousel-inner">
			@foreach($campanias as $key => $campania)
				
					<div class="carousel-item item{{ $key == 0 ? ' active' : '' }}">
						<div class="row">
							<div class="col-md-5">
								<img src="{{asset('storage/'.$campania->dirImagePortada)}}" style="width:100%; height: 190px;" alt="No se pudo cargar" />
							</div>
							<div class="col-md-7">
								<div style="font-size: 21px; font-weight: bold; font-family: sans-serif;">
									<a style="color: black;" href="{{route('campania.detail', $campania->titleUrl)}}">{{$campania->title}}</a>
								</div>
								<label>{{$campania->summary}}</label>
								<div class="fecha_article">
									{{$campania->fechaPublicacion}}
								</div>
							</div>
						</div>
					</div>
				
			@endforeach
		</div>
		<a class="carousel-control-prev" href="#carousel-i" role="button" data-slide="prev">
		    <div style="padding: 7px; padding-bottom: 2px; position: absolute; left: 1px; background-color: rgba(42,122,202,0.7);">
			    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			    <span class="sr-only">Previous</span>
		    </div>
		  </a>
		  <a class="carousel-control-next" href="#carousel-i" role="button" data-slide="next">
		    <div style="padding: 7px; padding-bottom: 2px; position: absolute; right: 1px; background-color: rgba(42,122,202,0.7);">
		    	<span class="carousel-control-next-icon" aria-hidden="true"></span>
		    </div>
		    <span class="sr-only">Next</span>
		  </a>
	</div>
</div>-->