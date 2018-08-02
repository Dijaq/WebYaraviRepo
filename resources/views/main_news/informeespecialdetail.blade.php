@extends('layout')

@section('contenido')		

	<div class="row">
		<div class="col-md-12">
			<div class="tipo_noticia">
				<h3>
					Informe Especial
				</h3>
			</div>
			
			<div class="title_article"><h1>{{$informeEspecial->title}}</h1></div>

			<div class="summary_article">
				{{$informeEspecial->summary}}
			</div>

			<div class="fecha_article">
				{{$informeEspecial->fechaPublicacion}}
			</div>
		</div>
		<div class="col-md-8">
			<div class="row">
				<div class="col-md-12">					
					
					<div class="picture left" style="width:100%;"> 
						<img src="{{asset('storage/'.$informeEspecial->contentInformeEspecial->galeria)}}" style="width:100%;" alt="No se pudo cargar" /> <br />
					</div>
					
				</div>					
			</div>

			<div class="row">
				<div class="content_article col-md-12">
					{!!$informeEspecial->contentInformeEspecial->content!!}
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
			<div class="fb-comments" data-href="http://localhost:8000/empresarial/{{$informeEspecial->id}}"  data-width="100%"  data-numposts="5"></div>
		</div>


	</div>

@stop