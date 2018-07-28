@extends('layout')

@section('contenido')

	<div class="row">
		<div class="col-md-12">
			<div style="margin-top: 15px; margin-bottom: 15px; font-size: 30px; font-family: Gremoria; font-weight: 600; text-align: center; color: #6E6E6E; text-decoration: underline;" >Galería de Videos</div>
		</div>
	</div>
	<div class="row">
		<div class="information_radio col-md-9" >
			<div class="row">
				@foreach($videos as $video)
					<div class="col-md-6">
						<div class="video-responsive">
							{!!$video->embebedVideo!!}
						</div>
					</div>
				@endforeach
			</div>			
		</div>
		<div class="col-md-3">
			<br>
			@include('columnpublicidad');
		</div>
	</div>

	<div class="row">
		<div class="col-md-8">
			<br>
			<br>
			<br>
			<h1>Coméntanos</h1>
		</div>
		<div class="col-md-8">
			<div class="fb-comments" data-href="http://www.radioyaravi.org.pe/elecciones-2018"  data-width="100%"  data-numposts="5"></div>
		</div>
	</div>
	<br>

@stop