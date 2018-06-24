@extends('layout')

@section('contenido')

	<div class="row">
		<div class="col-md-7">
			<article>
				<div class="picture left" style="width:100%; position: relative;" > 
					<div class="nota_etiqueta">{{$new_principal->label->name}}</div>
					<div class="redes_etiqueta">
						<a target="_blank" href={{'https://www.facebook.com/sharer/sharer.php?u='.$urlServidor.'noticia/'.$new_principal->label->name.'/'.$new_principal->titleUrl.'&amp;src=sdkpreparse'}} ><i style=" position: absolute; right: 5px; top: 5px;   text-align: center;">
							<img src="https://www.facebook.com/images/fb_icon_325x325.png" class="img-responsive" width="22px">
						</i>
						</a>
					</div>
					<img src="{{asset('storage/'.$new_principal->dirImagePortada)}}" style="width:100%;" alt="Planeta Marte" /> <br />
					<div class="article-principal" style="position: absolute; bottom: 0px; background-color: rgba(171,178,185,0.5); width: 100%">
						<!--opacity: 0.4;-->
					<h3><a style="color: white;" href="{{route('newcontent.show', [$new_principal->label->name, $new_principal->titleUrl])}}">{{$new_principal->title}}</a></h3></div>
				</div>
				<div>
						{{$new_principal->summary}}
				</div>
			</article>
		</div>

		<div class="col-md-5">			
			<article>
				<div class="picture left" style="width:100%; position: relative;"> 
					<div class="nota_etiqueta">{{$new_secundaria->label->name}}</div>
					<div class="redes_etiqueta">
						<a target="_blank" href={{'https://www.facebook.com/sharer/sharer.php?u='.$urlServidor.'noticia/'.$new_secundaria->label->name.'/'.$new_secundaria->titleUrl.'&amp;src=sdkpreparse'}} ><i style=" position: absolute; right: 5px; top: 5px;   text-align: center;">
							<img src="https://www.facebook.com/images/fb_icon_325x325.png" class="img-responsive" width="22px">
						</i>
						</a>
					</div>
					<img src="{{asset('storage/'.$new_secundaria->dirImagePortada)}}" style="width:100%;" alt="Planeta Marte" /> <br />
					<div class="article-contenido"><a style="color: white;" href="{{route('newcontent.show', [$new_secundaria->label->name, $new_secundaria->titleUrl])}}">{{$new_secundaria->title}}</a></div>
				</div>
				<div>
					{{$new_secundaria->summary}}
				</div>
			</article>
			
		</div>				
	</div>

	<div class="row">
		<div class="col-md-9">
			<br>

			<div class="row">
				<div class="col-md-12">
					<div class="empresarial_etiqueta" style="border-radius: 10px 30px; text-align: center; font-size: 25px;">
						<strong>Locales</strong>
					</div>
					<br>
					<div class="row">
						@foreach($listaNoticiasLocales as $new)
							<div class="col-md-4" style="margin-bottom: 15px; padding-right: 5px;">
								<article>
									<div class="picture left" style="width:100%; position: relative;"> 
										<div class="nota_etiqueta">{{$new->label->name}}</div>
										<div class="redes_etiqueta">
											<a target="_blank" href={{'https://www.facebook.com/sharer/sharer.php?u='.$urlServidor.'noticia/'.$new->label->name.'/'.$new->titleUrl.'&amp;src=sdkpreparse'}} ><i style=" position: absolute; right: 5px; top: 5px;   text-align: center;">
												<img src="https://www.facebook.com/images/fb_icon_325x325.png" class="img-responsive" width="22px">
											</i>
											</a>
										</div>
										<img src="{{asset('storage/'.$new->dirImagePortada)}}" style="width:100%;" alt="Planeta Marte" /> <br />
										<div class="article-contenido"><a style="color: white;" href="{{route('newcontent.show', [$new->label->name, $new->titleUrl])}}">{{$new->title}}</a></div>
									</div>
								</article>
							</div>
						@endforeach
					</div>
				</div>

				@foreach($listaNoticiasPorTipo as $NoticiasPorTipo)
					<div class="col-md-12">
						<div class="empresarial_etiqueta" style="border-radius: 10px 30px; text-align: center; font-size: 25px;">
							<strong><a style="color: white" href={{route('classified.show', $NoticiasPorTipo->idLabel)}}>{{$NoticiasPorTipo->labelName}}</a></strong>
						</div>
						<br>
						<div class="row">
							@foreach($NoticiasPorTipo->noticias as $new)
								<div class="col-md-4" style="margin-bottom: 15px; padding-right: 5px;">
									<article>
										<div class="picture left" style="width:100%; position: relative;"> 
											<div class="nota_etiqueta">{{$new->label->name}}</div>
											<div class="redes_etiqueta">
												<a target="_blank" href={{'https://www.facebook.com/sharer/sharer.php?u='.$urlServidor.'noticia/'.$new->label->name.'/'.$new->titleUrl.'&amp;src=sdkpreparse'}} ><i style=" position: absolute; right: 5px; top: 5px;   text-align: center;">
													<img src="https://www.facebook.com/images/fb_icon_325x325.png" class="img-responsive" width="22px">
												</i>
												</a>
											</div>
											<img src="{{asset('storage/'.$new->dirImagePortada)}}" style="width:100%;" alt="Planeta Marte" /> <br />
											<div class="article-contenido"><a style="color: white;" href="{{route('newcontent.show', [$new->label->name, $new->titleUrl])}}">{{$new->title}}</a></div>
										</div>
									</article>
								</div>
							@endforeach
						</div>
					</div>
				@endforeach

				<div class="col-md-12">
					<div class="empresarial_etiqueta" style="border-radius: 10px 30px; text-align: center; font-size: 25px;">
						<strong>Empresariales</strong>
					</div>
					<br>
					<div class="carousel slide" id="carousel-1" data-ride="carousel">
						<div class="carousel-inner">
							@foreach($empresariales as $empresarial)
								@if($idEmpresarial === $empresarial->id)
									<div class="carousel-item active">
										<div class="row">
											<div class="col-md-5">
												<img src="{{asset('storage/'.$empresarial->dirImagePortada)}}" style="width:100%;" alt="Planeta Marte" />
											</div>
											<div class="col-md-7">
												<div style="font-size: 21px; font-weight: bold; font-family: sans-serif;">
													<a style="color: black;" href="{{route('empresarial.detail', $empresarial->id)}}">{{$empresarial->title}}</a>
												</div>
												<label>{{$empresarial->summary}}</label>
												<div class="fecha_article">
													{{$empresarial->fechaPublicacion}}
												</div>
											</div>
										</div>
									</div>
								@else
									<div class="carousel-item">
										<div class="row">
											<div class="col-md-5">
												<img src="{{asset('storage/'.$empresarial->dirImagePortada)}}" style="width:100%;" alt="Planeta Marte" />
											</div>
											<div class="col-md-7">
												<div style="font-size: 21px; font-weight: bold; font-family: sans-serif;">
													<a style="color: black;" href="{{route('empresarial.detail', $empresarial->id)}}">{{$empresarial->title}}</a>
												</div>
												<label>{{$empresarial->summary}}</label>
												<div class="fecha_article">
													{{$empresarial->fechaPublicacion}}
												</div>
											</div>
										</div>
									</div>
								@endif
							@endforeach
						</div>
					</div>
				</div>

			</div>

		</div>

		<!--Seccion de Anuncios-->
		<div class="col-md-3">
			<br>
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
					<img src="{{asset('storage/'.$new->dirImagePortada)}}" style="width:100%;" alt="Planeta Marte" />
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
	