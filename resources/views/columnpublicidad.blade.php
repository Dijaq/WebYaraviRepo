
	<div class="publicidad_etiqueta"><h5 style="margin-bottom: 0px; padding: 3px;">Publicidad</h5></div>

	<div class="carousel slide" id="carousel-1" data-ride="carousel">
	<!--Indicadores-->
		
		<!--Contenedor de los slide-->
		<div class="carousel-inner">
			@foreach($publicidades as $publicidad)
				@if($idPublicidad === $publicidad->id)
					<div class="carousel-item active">
						<a href="{{$publicidad->url_page}}" target="_blank"><img src="{{Storage::url($publicidad->dir_image)}}" alt="" class="img-responsive" style="width:100%;"></a>
					</div>
				@else
					<div class="carousel-item">
						<a href="{{$publicidad->url_page}}" target="_blank"><img src="{{Storage::url($publicidad->dir_image)}}" alt="" class="img-responsive" style="width:100%;"></a>
					</div>
				@endif
			@endforeach
		</div>
	</div>
	<br>
		<div style=" background-color: #BD2A2A; color: white; font-family: Gremoria; padding: 5px; font-size: 22px; border-radius: 5px;"><a style="color: white;" href="{{route('planesdegobierno2018.index')}}">Planes de Gobierno 2018</a></div>
	<br>
	<div class="publicidad_etiqueta"><h5 style="margin-bottom: 0px; padding: 3px;">Encuesta</h5></div>
		<div>
			<form method="POST" action="{{route('encuesta.votoStore', $encuesta->id)}}">
				{!! method_field('PUT') !!}
				{!!csrf_field()!!}
				<div style="border-style: dashed; border-width: 1px; padding: 10px">
					@if(session()->has('info'))
			    		<h3>{{session('info')}}</h3>
			    		<h6>Así va la encuesta:</h6>
			    		@foreach($encuesta->encuestaOpciones as $encuestaOpcion)
			    			<label style="padding-left: 5px">{{$encuestaOpcion->nameOption}}</label>
				    		<div class="progress">
	    						<div class="progress-bar" style="width:{{100*$encuestaOpcion->value/$maxvalueEncuesta}}%">{{$encuestaOpcion->value}} voto(s)</div>
	  						</div>
						@endforeach
			    		
			  		@else
						<strong><label style="font-size: 18px;">{{$encuesta->name}}</label></strong><br>
						<label for="">Opciones:</label><br>
						@foreach($encuesta->encuestaOpciones as $encuestaOpcion)
							<input type="radio" name="opcion" value={{$encuestaOpcion->id}}><label style="padding-left: 5px">{{$encuestaOpcion->nameOption}}</label><br>
						@endforeach
						<input class="btn" type="submit" value="Votar">
						<!--<label for=""><a href="">Vea todas nuestra encuestas</a></label>-->
					@endif
				</div>
			</form>
		</div>
	<br>

	<div class="clima">
		<a class="weatherwidget-io" href="https://forecast7.com/es/n16d41n71d54/arequipa/" data-label_1="AREQUIPA" data-label_2="Clima" data-days="3" data-theme="tile_wood" >AREQUIPA Clima</a>
		<script>
		!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
		</script>
	</div>