
	<div class="publicidad_etiqueta">Publicidad</div>

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
	<div class="publicidad_etiqueta">Encuesta</div>
		<form method="POST" action="{{route('encuesta.votoStore', $encuesta->id)}}">
			{!! method_field('PUT') !!}
			{!!csrf_field()!!}
			<div style="border-style: dashed; border-width: 1px; padding: 10px">
				@if(session()->has('info'))
    				<h3>{{session('info')}}</h3>
  				@else
					<label for="">{{$encuesta->name}}</label>
					<label for="">Opciones</label><br>
					@foreach($encuesta->encuestaOpciones as $encuestaOpcion)
						<input type="radio" name="opcion" value={{$encuestaOpcion->id}}><label style="padding-left: 5px">{{$encuestaOpcion->nameOption}}</label><br>
					@endforeach
					<input class="btn" type="submit" value="Votar">
					<label for=""><a href="">Vea todas nuestra encuestas</a></label>
				@endif
			</div>
		</form>
	<br>

	<!--<div class="clima">
		<a class="weatherwidget-io" href="https://forecast7.com/es/n16d41n71d54/arequipa/" data-label_1="AREQUIPA" data-label_2="Clima" data-mode="Forecast" data-days="3" data-theme="gray" >AREQUIPA Clima</a>
		<script>
		!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
		</script>
	</div>-->
	<div class="clima">
		<a class="weatherwidget-io" href="https://forecast7.com/es/n16d41n71d54/arequipa/" data-label_1="AREQUIPA" data-label_2="Clima" data-days="3" data-theme="tile_wood" >AREQUIPA Clima</a>
		<script>
		!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
		</script>
	</div>