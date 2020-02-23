@extends('layout')

@section('contenido')

	<div class="row">
		<div class="col-md-12">
			<div style="margin-top: 15px; margin-bottom: 15px; font-size: 30px; font-family: Gremoria; font-weight: 600; text-align: center; color: #6E6E6E" >{{$tipoNoticia}}</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-9">
			<div class="row">
			@foreach($campanias as $campania)
				<div class="col-md-6" style="margin-bottom: 15px;">
					<article>
						<div class="picture left" style="width:100%; position: relative;"> 
							
							<div class="redes_etiqueta">
								<a target="_blank" href={{'https://www.facebook.com/sharer/sharer.php?u='.$urlServidor.'campania/'.$campania->titleUrl.'&amp;src=sdkpreparse'}} ><i style=" position: absolute; right: 5px; top: 5px;   text-align: center;">
									<img src="https://www.facebook.com/images/fb_icon_325x325.png" class="img-responsive" width="22px">
								</i>
								</a>
							</div>
							<img src="{{asset('storage/'.$campania->dirImagePortada)}}" style="width:100%; height: 240px;" alt="No se pudo cargar" /> <br />
							<div class="article-contenido"><a style="color: white;" href="{{route('campania.detail', $campania->titleUrl)}}">{{$campania->title}}</a></div>
						</div>
					</article>
				</div>
			@endforeach
			</div>
			<nav aria-label="Page navigation example">
				{!!$campanias->links()!!}
			</nav>

		</div>

		<div class="col-md-3">
			@include('columnpublicidad')
		</div>
	</div>

	<br>
	<div class="row">
		<div class="col-md-9">
			<h2 style="text-decoration: underline #6E6E6E;">Últimas Noticias</h2>
			@foreach($listaUltimasNoticias as $new)
			<div class="row">
				<div class="col-md-4">
					<div class="nota_etiqueta">{{$new->label->name}}</div>
					<img src="{{asset('storage/'.$new->dirImagePortada)}}" style="width:100%;" alt="No se pudo cargar" />
				</div>
				<div class="col-md-8">
					<div style="font-size: 21px; font-weight: bold; font-family: sans-serif;">
						<a style="color: black;" href="{{route('newcontent.show', [$new->label->name, $new->titleUrl])}}">{{$new->title}}</a>
					</div>
					<label>{{$new->summary}}</label>
					<div class="fecha_article">
						{{$new->fechaPublicacion}}
					</div>
				</div>
			</div>
			<br>
			@endforeach
		</div>
	</div>	


@stop