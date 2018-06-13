@extends('layoutNew')

@section('contenido')		

	<div class="row">
		<div class="col-md-12">
			<div class="tipo_noticia">
				<h3>
					<label for="" style="background-color: #690; color: white; padding: 5px; font-family: Gremoria;">{{$detailnew->label->name}}</label>
				</h3>
			</div>
			
			<div class="title_article"><h1>{{$detailnew->title}}</h1></div>

			<div class="summary_article">
				{{$detailnew->summary}}
			</div>

			<div class="fecha_article">
				{{$detailnew->fechaPublicacion}}
			</div>
		</div>
		<div class="col-md-8">
			<div class="row">
				<div class="col-md-12">						
					<div class="picture left" style="width:100%;"> 
						<img src="{{asset('storage/'.$detailnew->contentnews->galeria)}}" style="width:100%;" alt="Planeta Marte" /> <br />
					</div>
				</div>
				
				<div class="col-md-12">
					<div class="content_article">
						{!!$detailnew->contentnews->content!!}
					</div>
				</div>
				<div class="col-md-12">
					<h1 style="margin-top: 20px;">Coméntanos</h1>
				</div>
				<div class="col-md-12">
					<div class="fb-comments" data-href="http://localhost:8000/noticia/{{$detailnew->label->name}}/{{$detailnew->titleUrl}}"  data-width="100%"  data-numposts="5"></div>
				</div>
			</div>
		</div>
		<!--Seccion de Anuncios-->
		<div class="col-md-4">
			<div class="row" style="font-weight: bold;">
				<div class="col-md-12">Más de {{$detailnew->label->name}}</div>
			</div>
			@foreach($moreNews as $moreNew)
				<div class="row more_article">					
					<div class="col-md-6" style="">
						<img class="image" src="{{asset('storage/'.$moreNew->contentnews->galeria)}}" alt="No se pudo cargar" / width="100%">
					</div>
					<div class="title_more_article col-md-6" style="padding-left: 0px;">
						<a style="color: #34597F; font-weight: bold; font-size: 16px; font-family:'Gremoria';" href="{{route('newcontent.show', [$moreNew->label->name, $moreNew->titleUrl])}}">{{$moreNew->title}}</a>
					</div>
				</div>
				<br>
			@endforeach

		</div>
	</div>		
	<!--<div class="row">

		<div class="col-md-8">
			<h1 style="margin-top: 20px;">Coméntanos</h1>
		</div>
		<div class="col-md-8">
			<div class="fb-comments" data-href="http://localhost:8000/noticia/{{$detailnew->label->name}}/{{$detailnew->id}}"  data-width="100%"  data-numposts="5"></div>
		</div>


	</div>-->

@stop