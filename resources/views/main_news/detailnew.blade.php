@extends('layoutNew')

@section('contenido')		

	<div class="row">
		<div class="col-md-12">
			<div class="tipo_noticia">
				<h3>
					<label for="" style="background-color: {{$detailnew->label->color}}; color: white; padding: 5px; font-family: Gremoria;">{{$detailnew->label->name}}</label>
				</h3>
			</div>
			
			<div class="title_article" style="margin: 10px;"><h1>{{$detailnew->title}}</h1></div>

			<div class="summary_article" style="margin: 10px;">
				{{$detailnew->summary}}
			</div>

			<div class="fecha_article" style="font-weight: bold; margin: 10px;" ">
				<label for="">{{$detailnew->fechaPublicacion}} / Publicado por: {{$detailnew->nameEditor}}</label>
				<!--<label for="">
				<div >
					<img style="width: 40px;" src="{{asset('storage/facebook.png')}}" alt="">
				</div></label>-->
			</div>
		</div>
		<div class="col-md-8">
			<div class="row">
				<div class="col-md-12" >
					@if($kindGaleria == 0)						
						<div class="picture left" style="width:100%;"> 
						<img src="{{asset('storage/'.$detailnew->contentnews->galeria)}}" style="width:100%;" alt="No se pudo cargar" /> <br />
						</div>
					@else
						{!!$detailnew->contentnews->galeria!!}
					@endif
				</div>
				
				<div class="col-md-12">
					<div class="content_article" style="margin: 10px;">
						{!!$detailnew->contentnews->content!!}
					</div>
				</div>
				<div class="col-md-12">
					<h1 style="margin-top: 20px;">Coméntanos</h1>
				</div>
				<div class="col-md-12">
					<div class="fb-comments" data-href="{{$urlServidorComentarios}}noticia/{{$detailnew->label->name}}/{{$detailnew->titleUrl}}"  data-width="100%"  data-numposts="5"  data-order-by="reverse_time"></div>
				</div>
			</div>
		</div>
		<!--Seccion de Anuncios-->
		<div class="col-xs-12 col-sm-12 col-md-4">

			<!--Agregado Publicidad -->
			
			<!--<div> 
				<a href="https://fundacionmohme.org/especiales/vigilancia-electoral/" target="_blank">
					<img src="/storage/news/20200116-170401_vigilancia-electoral.jpeg" alt="Vigilancia Electoral" class="img-responsive" style="width:100%;"> 
				</a>
			</div>
			<br>-->
			
			<div class="row" style="font-weight: bold;">
				<div class="col-xs-12 col-sm-12 col-md-12">
						
					<div class="publicidad_etiqueta"><h5 style="margin-bottom: 0px; padding: 3px;">Publicidad</h5></div>
					
					<!-- /21907083702/yaravi/yaravi_rad_aqp_web_home_caja1 -->
					<div id='gpt_caja1'>
					  <script>
					    googletag.cmd.push(function() { googletag.display('gpt_caja1'); });
					  </script>
					</div>

					<!--<div class="carousel slide" id="carousel-1" data-ride="carousel">
						<div class="carousel-inner">
							@foreach($publicidades as $key => $publicidad)	
								<div class="carousel-item item{{ $key == 0 ? ' active' : '' }}">
									<a href="{{$publicidad->url_page}}" target="_blank"><img src="{{Storage::url($publicidad->dir_image)}}" alt="" class="img-responsive" style="width:100%;"></a>
								</div>
							@endforeach
						</div>
					</div>-->
				</div>
			</div>
	<!--Hasta aqui seccion de publicidad-->
			<br>

			<div class="row" style="font-weight: bold;">
				<div class="col-xs-12 col-sm-12 col-md-12">
					<div style="font-size: 22px; font-family: 'Gremoria';">Más de {{$detailnew->label->name}}</div>
				</div>
			</div>
			@foreach($moreNews as $moreNew)
				<div class="row more_article">					
					<div class="col-6 col-sm-6 col-md-6" style="">
						<img class="image" src="{{asset('storage/'.$moreNew->dirImagePortada)}}" alt="No se pudo cargar" / width="100%">
					</div>
					<div class="title_more_article col-6 col-sm-6 col-md-6" style="padding-left: 0px;">
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
