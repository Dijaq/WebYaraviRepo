@extends('layout')

@section('contenido')

	<h2>Estamos en vivo</h1>
	<div class="row">
		
		<div class="col-md-4 offset-md-4">
			<div style = "background-color: white; border-radius: 10px 10px;">
				<div>
					<audio allow="autoplay" preload controls style="width: 100%;" id="myAudio" >
						<!-- playsinline loop played allow="autoplay"-->
						<source src="http://99.198.110.162:7012/;stream.nsv&amp;type=mp3" type="audio/mp3">
						<source src="http://99.198.110.162:7012/;stream.nsv&amp;type=ogg" type="audio/ogg">
					</audio>
				</div>
				<br>
				<div style="" onclick="presionar()" name="btn1" id="btn1">
					<img src="{{asset('storage/RadioYaravi.jpg')}}" alt="Logo Yaravi" style="width: 100%; vertical-align: middle; border-radius: 10px 10px;">
				</div>
			</div>

			<!--<button onclick="presionar()" name="btn1" id="btn1">Presionar</button>-->
		</div>
		
		<div class="col-md-12">
			<h1 style="margin-top: 20px;">Coméntanos</h1>
		</div>
		<div class="col-md-12">
			<div class="fb-comments" data-href="{{$urlServidorComentarios}}yaravi/audioenvivo"  data-width="100%"  data-numposts="5"  data-order-by="reverse_time">
				
			</div>
		</div>
	</div>
	<br>

	<script type="text/javascript">
		$("#btn1").click(function() { 
   			let audio = document.getElementById("myAudio");
			audio.autoplay = true;
			audio.load();
		});	

		$("#btn1").click();
	</script>


@stop
