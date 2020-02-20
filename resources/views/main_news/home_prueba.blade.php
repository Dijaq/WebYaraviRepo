@extends('layout_prueba')

@section('contenido')
	
	<!-- /21907083702/yaravi/yaravi_rad_aqp_web_home_laterall -->
	

	<div class="row" >
		<div class="col-md-2">
			<div>
				<div id='gpt_laterall' style="position: fixed">
				  <script>
				    googletag.cmd.push(function() { googletag.display('gpt_laterall'); });
				  </script>
				</div>
			</div>		
		</div>	

		<div class="col-md-8">

			@include('navbarNoticias')

			<div class="row">
				<div class="col-md-12">
					<div class="row">
						<!--<div class="col-md-12">
							<iframe src="https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2F231060803576406%2Fvideos%2F2268754023140397%2F&show_text=0&width=560" width="560" height="315" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allowFullScreen="true"></iframe>
						</div>-->
						<div class="col-md-7">
							@if($neworvideo == 2)
								<div class="article-contenido">{{$new_principal->title}}</div>
								<div class="video-responsive">{!!$new_principal->embebedVideo!!}</div>
							@else
								<article>
									<div class="picture left" style="width:100%; position: relative;" > 
										<div class="nota_etiqueta" style="background-color: {{$new_principal->label->color}}">{{$new_principal->label->name}}</div>
										<div class="redes_etiqueta">
											<a target="_blank" href={{'https://www.facebook.com/sharer/sharer.php?u='.$urlServidor.'noticia/'.str_slug($new_principal->label->name).'/'.$new_principal->titleUrl.'&amp;src=sdkpreparse'}} ><i style=" position: absolute; right: 5px; top: 5px;   text-align: center;">
												<img src="https://www.facebook.com/images/fb_icon_325x325.png" class="img-responsive" width="22px">
											</i>
											</a>
											<a target="_blank" href={{'https://twitter.com/share?url='.$urlServidor.'noticia/'.str_slug($new_principal->label->name).'/'.$new_principal->titleUrl.'&amp;src=sdkpreparse'}} ><i style=" position: absolute; right: 35px; top: 5px;   text-align: center;">
												<img src="https://playbookathlete.com/wp-content/uploads/2016/10/twitter-logo-4.png" class="img-responsive" width="22px">
											</i>
											</a>
										</div>
										<img src="{{asset('storage/'.$new_principal->dirImagePortada)}}" style="width:100%;" alt="No se pudo cargar" /> <br />
										<div class="article-principal" style="position: absolute; bottom: 0px; background-color: rgba(171,178,185,0.5); width: 100%">
											<!--opacity: 0.4;-->
										<h3><a style="color: white;" href="{{route('newcontent.show', [$new_principal->label->name, $new_principal->titleUrl])}}">{{$new_principal->title}}</a></h3></div>
									</div>
									<div>
											{{$new_principal->summary}}
									</div>
								</article>
							@endif
						</div>

						<div class="col-md-5">			
							<article>
								<div class="picture left" style="width:100%; position: relative;"> 
									<div class="nota_etiqueta" style="background-color: {{$new_secundaria->label->color}}">{{$new_secundaria->label->name}}</div>
									<div class="redes_etiqueta">
										<a target="_blank" href={{'https://www.facebook.com/sharer/sharer.php?u='.$urlServidor.'noticia/'.str_slug($new_secundaria->label->name).'/'.$new_secundaria->titleUrl.'&amp;src=sdkpreparse'}} ><i style=" position: absolute; right: 5px; top: 5px;   text-align: center;">
											<img src="https://www.facebook.com/images/fb_icon_325x325.png" class="img-responsive" width="22px">
										</i>
										</a>
										<a target="_blank" href={{'https://twitter.com/share?url='.$urlServidor.'noticia/'.str_slug($new_secundaria->label->name).'/'.$new_secundaria->titleUrl.'&amp;src=sdkpreparse'}} ><i style=" position: absolute; right: 35px; top: 5px;   text-align: center;">
											<img src="https://playbookathlete.com/wp-content/uploads/2016/10/twitter-logo-4.png" class="img-responsive" width="22px">
										</i>
										</a>
									</div>
									<img src="{{asset('storage/'.$new_secundaria->dirImagePortada)}}" style="width:100%;" alt="No se pudo cargar" /> <br />
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
							
							<div class="row">
								<div class="col-md-12">
									<div class="empresarial_etiqueta" style="border-radius: 10px 30px; text-align: center; font-size: 25px;">
										<strong><a style="color: white" href={{route('actualidad.show', 3)}}>Actualidad</a></strong>
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
															<a target="_blank" href={{'https://twitter.com/share?url='.$urlServidor.'noticia/'.$new->label->name.'/'.$new->titleUrl.'&amp;src=sdkpreparse'}} ><i style=" position: absolute; right: 35px; top: 5px;   text-align: center;">
																<img src="https://playbookathlete.com/wp-content/uploads/2016/10/twitter-logo-4.png" class="img-responsive" width="22px">
															</i>
															</a>
														</div>
														<img src="{{asset('storage/'.$new->dirImagePortada)}}" style="width:100%; height: 180px;" alt="No se pudo cargar" /> <br />
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
															<div class="nota_etiqueta" style="background-color: {{$new->label->color}}">{{$new->label->name}}</div>
															<div class="redes_etiqueta">
																<a target="_blank" href={{'https://www.facebook.com/sharer/sharer.php?u='.$urlServidor.'noticia/'."'".str_slug($new->label->name)."'".'/'.$new->titleUrl.'&amp;src=sdkpreparse'}} ><i style=" position: absolute; right: 5px; top: 5px;   text-align: center;">
																	<img src="https://www.facebook.com/images/fb_icon_325x325.png" class="img-responsive" width="22px">
																</i>
																</a>
																<a target="_blank" href={{'https://twitter.com/share?url='.$urlServidor.'noticia/'.str_slug($new->label->name)."'".'/'.$new->titleUrl.'&amp;src=sdkpreparse'}} ><i style=" position: absolute; right: 35px; top: 5px;   text-align: center;">
																	<img src="https://playbookathlete.com/wp-content/uploads/2016/10/twitter-logo-4.png" class="img-responsive" width="22px">
																</i>
																</a>
															</div>
															<!--
															<div class="redes_etiqueta">
																<a target="_blank" href={{'https://www.facebook.com/sharer/sharer.php?u='.$urlServidor.'noticia/'.$new->label->name.'/'.$new->titleUrl.'&amp;src=sdkpreparse'}} ><i style=" position: absolute; right: 55px; top: 55px;   text-align: center;">
																	<img src="{{asset('storage/gallery.jpg')}}" class="img-responsive" width="80px">
																</i>
																</a>
															</div>-->
															<img src="{{asset('storage/'.$new->dirImagePortada)}}" style="width:100%; height: 180px;" alt="No se pudo cargar" /> <br />
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
										<strong><a style="color: white" href={{route('nota.classifiedempresarial')}}>Empresariales</a></strong>
									</div>
									<br>
									<div class="carousel slide" id="carousel-e" data-ride="carousel">
										<div class="carousel-inner">
											@foreach($empresariales as $key => $empresarial)
												
													<div class="carousel-item item{{ $key == 0 ? ' active' : '' }}">
														<div class="row">
															<div class="col-md-5">
																<img src="{{asset('storage/'.$empresarial->dirImagePortada)}}" style="width:100%; height: 190px;" alt="No se pudo cargar" />
															</div>
															<div class="col-md-7">
																<div style="font-size: 21px; font-weight: bold; font-family: sans-serif;">
																	<a style="color: black;" href="{{route('empresarial.detail', $empresarial->titleUrl)}}">{{$empresarial->title}}</a>
																</div>
																<label>{{$empresarial->summary}}</label>
																<div class="fecha_article">
																	{{$empresarial->fechaPublicacion}}
																</div>
															</div>
														</div>
													</div>
												
											@endforeach
										</div>
										<a class="carousel-control-prev" href="#carousel-e" role="button" data-slide="prev">
										    <div style="padding: 7px; padding-bottom: 2px; position: absolute; left: 1px; background-color: rgba(42,122,202,0.7);">
											    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
											    <span class="sr-only">Previous</span>
										    </div>
										  </a>
										  <a class="carousel-control-next" href="#carousel-e" role="button" data-slide="next">
										    <div style="padding: 7px; padding-bottom: 2px; position: absolute; right: 1px; background-color: rgba(42,122,202,0.7);">
										    	<span class="carousel-control-next-icon" aria-hidden="true"></span>
										    </div>
										    <span class="sr-only">Next</span>
										  </a>
									</div>
								</div>


								<div class="col-md-12">
									<div class="empresarial_etiqueta" style="border-radius: 10px 30px; text-align: center; font-size: 25px;">
										<strong><a style="color: white" href={{route('nota.classifiedinformesespeciales')}}>Informes Especiales</a></strong>
									</div>
									<br>
									<div class="carousel slide" id="carousel-i" data-ride="carousel">
										<div class="carousel-inner">
											@foreach($informesespeciales as $key => $informeespecial)
												
													<div class="carousel-item item{{ $key == 0 ? ' active' : '' }}">
														<div class="row">
															<div class="col-md-5">
																<img src="{{asset('storage/'.$informeespecial->dirImagePortada)}}" style="width:100%; height: 190px;" alt="No se pudo cargar" />
															</div>
															<div class="col-md-7">
																<div style="font-size: 21px; font-weight: bold; font-family: sans-serif;">
																	<a style="color: black;" href="{{route('informeespecial.detail', $informeespecial->titleUrl)}}">{{$informeespecial->title}}</a>
																</div>
																<label>{{$informeespecial->summary}}</label>
																<div class="fecha_article">
																	{{$informeespecial->fechaPublicacion}}
																</div>
															</div>
														</div>
													</div>
												
											@endforeach
										</div>
										<a class="carousel-control-prev" href="#carousel-i" role="button" data-slide="prev">
										    <div style="padding: 7px; padding-bottom: 2px; position: absolute; left: 1px; background-color: rgba(42,122,202,0.7);">
											    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
											    <span class="sr-only">Previous</span>
										    </div>
										  </a>
										  <a class="carousel-control-next" href="#carousel-i" role="button" data-slide="next">
										    <div style="padding: 7px; padding-bottom: 2px; position: absolute; right: 1px; background-color: rgba(42,122,202,0.7);">
										    	<span class="carousel-control-next-icon" aria-hidden="true"></span>
										    </div>
										    <span class="sr-only">Next</span>
										  </a>
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
							<nav aria-label="Page navigation example">
								{!!$listaUltimasNoticias->links()!!}
							</nav>
						</div>
					</div>		
							
				</div>
			</div>

				<div class="row">
					<!-- /21907083702/yaravi/yaravi_rad_aqp_web_home_zocalo -->
					<div id='gpt_zocalo'>
					  <script>
					    googletag.cmd.push(function() { googletag.display('gpt_zocalo'); });
					  </script>
					</div>	

				</div>	
					
		</div>	

		<div class="col-md-2">
			<!-- /21907083702/yaravi/yaravi_rad_aqp_web_home_lateralr -->
			<div id='gpt_lateralr' style="position: fixed">
			  <script>
			    googletag.cmd.push(function() { googletag.display('gpt_lateralr'); });
			  </script>
			</div>		
		</div>
	</div>	


@stop
	
