@extends('layout')

@section('contenido')

	<h1>Audio</h1>
	<audio preload="auto" controls>
		 <source src="http://99.198.110.162:7012/;stream.nsv&type=ogg" type="audio/ogg">
		 <source src="http://99.198.110.162:7012/;stream.nsv&type=mp3" type="audio/mp3">
	</audio>

	<!--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script>
		$(function() {
			$('audio').audioPlayer();
		});
	</script>-->



@stop