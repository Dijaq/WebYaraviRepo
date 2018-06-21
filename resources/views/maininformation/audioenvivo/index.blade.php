@extends('layout')

@section('contenido')

	<h1>Estamos en vivo</h1>
	<!--<audio preload="auto" controls>
		 <source src="http://99.198.110.162:7012/;stream.nsv&type=ogg" type="audio/ogg">
		 <source src="http://99.198.110.162:7012/;stream.nsv&type=mp3" type="audio/mp3">
	</audio>-->

	<!--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script>
		$(function() {
			$('audio').audioPlayer();
		});
	</script>-->

	<div class="col-md-4 offset-md-4">
		<div style = "background-color: white; border-radius: 10px 10px;">
			<div style="">
				<img src="{{asset('storage/RadioYaravi.jpg')}}" alt="Logo Yaravi" style="width: 100%; vertical-align: middle; border-radius: 10px 10px;">
				<br><br>
			</div>
			<div>
				<audio  controls style="width: 100%;" autoplay playsinline>
					<source src="http://99.198.110.162:7012/;stream.nsv&amp;type=mp3" type="audio/mp3">
					<source src="http://99.198.110.162:7012/;stream.nsv&amp;type=ogg" type="audio/ogg">
				</audio>
			</div>
		</div>
      </div>

	<div class="col-md-12">
		<h1 style="margin-top: 20px;">Coméntanos</h1>
	</div>
	<div class="col-md-12">
		<div class="fb-comments" data-href="{{$urlServidorComentarios}}yaravi/audioenvivo"  data-width="100%"  data-numposts="5">
			
		</div>
	</div>
	<br>

@stop