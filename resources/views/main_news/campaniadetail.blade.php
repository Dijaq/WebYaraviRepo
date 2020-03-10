@extends('layoutNew')

@section('contenido')		

	<div class="row">
		<div class="col-md-12">
			<div class="tipo_noticia">
				<h3>
					Campaña
				</h3>
			</div>
			
			<div class="title_article"><h1>{{$campania->title}}</h1></div>

			<div class="summary_article">
				{{$campania->summary}}
			</div>

			<div class="fecha_article">
				{{$campania->fechaPublicacion}}
			</div>
		</div>
		<div class="col-md-8">
			<div class="row">
				<div class="col-md-12">					
					
					<div class="picture left" style="width:100%;"> 
						<img src="{{asset('storage/'.$campania->contentCampanias->galeria)}}" style="width:100%;" alt="No se pudo cargar" /> <br />
					</div>
					
				</div>					
			</div>

			<div class="row">
				<div class="content_article col-md-12">
					{!!$campania->contentCampanias->content!!}
				</div>
			</div>
			
		</div>
		<!--Seccion de Anuncios-->
		<div class="col-md-4">
			@include('columnpublicidad')
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
			<div class="fb-comments" data-href="{{$urlServidor}}/campania/{{$campania->titleUrl}}"  data-width="100%"  data-numposts="5"  data-order-by="reverse_time"></div>
		</div>


	</div>

@stop