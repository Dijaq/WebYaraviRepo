<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<meta name="keywords" content="{{$detailNavegador->keywords}}">
	<meta name="robots" content="index, follow">
	<meta name="googlebot" content="index, follow">

    <meta property="og:url" content="{{$detailNavegador->dirUrl}}"/>
    <meta property="fb:app_id" content="629367300738154" />
    <meta property="og:title" content="{{$detailNavegador->title}}"/>
    <meta property="og:description" content="{{$detailNavegador->summary}}"/>
    <meta property="og:type" content="article" />
    <meta property="og:image" itemprop="image" content={{asset('storage/'.$detailNavegador->dirImage)}}/>
    <meta property="og:type" content="article" />


    <meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:site" content="@RadioYaravi">
	<meta name="twitter:creator" content="@RadioYaravi">
	<meta name="twitter:domain" content="https://www.radioyaravi.org.pe">
	<meta name="twitter:title" content="{{$detailNavegador->title}}">
	<meta name="twitter:description" content="{{$detailNavegador->summary}}">
	<meta name="twitter:image" content={{asset('storage/'.$detailNavegador->dirImage)}}>
	<meta property="twitter:account_id" content="997311201095897089">

	<link rel="icon" href={{asset('storage/favicon.ico')}} type="image/x-icon" />

	<link rel="canonical" href={{$detailNavegador->dirUrl}}>

    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">-->
    <script src="{{asset('js/app.js')}}"></script>

	<!--<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>-->

	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-121070627-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-121070627-1');
	</script>

	<!--<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>-->
	<script 
		data-ad-client="ca-pub-8047009650931790" 
		async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js">
	</script>

	
	<title>{{$detailNavegador->title}}</title>
</head>
<body>
		@include('navbarYaravi')

	<!--<div class="container-fluid" style="background: #EFF5FB; max-width: 1500px; padding: 0px;">-->
	<div class="container-fluid" style="background: #e1e1e6; max-width: 1500px; padding: 0px;">
	

		@if((new \Jenssegers\Agent\Agent())->isMobile())

			@include('navbarNoticiasPrueba')
			@yield('contenido')

			<div class="row">
				<div class="col-md-12 col-sm-12">
					<div class ="row justify-content-center">
						<div id='gpt_zocalo' style="position: fixed; bottom: 0px; z-index: 99; top: auto; ">
						  <!--<script>
						    googletag.cmd.push(function() { googletag.display('gpt_zocalo'); });
						  </script>-->
						</div>	
					</div>
				</div>

			</div>	

		@else
			<div class="row" >

				<div class="col-md-2">
					<div class ="row justify-content-end">
						<div id='gpt_laterall' style="position: fixed">
							<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
							<!-- yaravi_lateral_left -->
							<ins class="adsbygoogle"
								style="display:block"
								data-ad-client="ca-pub-8047009650931790"
								data-ad-slot="6093549727"
								data-ad-format="auto"
								data-full-width-responsive="true"></ins>
							<script>
								(adsbygoogle = window.adsbygoogle || []).push({});
							</script>
						  <!--<script>
						    googletag.cmd.push(function() { googletag.display('gpt_laterall'); });
						  </script>-->
						</div>
					</div>		
				</div>	

				<div class="col-md-8">

					@include('navbarNoticiasPrueba')
					@yield('contenido')

					<div class="row">
					<!-- /21907083702/yaravi/yaravi_rad_aqp_web_home_zocalo -->
						<!--<div style="position: fixed; bottom: 0px; z-index: 99; top: auto; ">
							<img style="width:100%" src="https://upload.wikimedia.org/wikipedia/commons/1/1a/Tabla-actual-alargada.png" alt="">
							<img src="https://upload.wikimedia.org/wikipedia/commons/1/1a/Tabla-actual-alargada.png" alt="">
						</div>	-->
						<div class="col-md-12">
							<div class ="row justify-content-center">
								<div id='gpt_zocalo' style="position: fixed; bottom: 0px; z-index: 99; top: auto;">
								  <!--<script>
								    googletag.cmd.push(function() { googletag.display('gpt_zocalo'); });
								  </script>-->
								</div>	
							</div>
						</div>

					</div>	
				</div>	

				<div class="col-md-2">
					<!-- /21907083702/yaravi/yaravi_rad_aqp_web_home_lateralr -->
					<div class ="row justify-content-start">
						<div id='gpt_lateralr' style="position: fixed">
					  		<!--<script>
					    		googletag.cmd.push(function() { googletag.display('gpt_lateralr'); });
					  		</script>-->
							    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
								<!-- yaravi_lateral_right -->
								<ins class="adsbygoogle"
									style="display:block"
									data-ad-client="ca-pub-8047009650931790"
									data-ad-slot="2980301223"
									data-ad-format="auto"
									data-full-width-responsive="true"></ins>
								<script>
									(adsbygoogle = window.adsbygoogle || []).push({});
								</script>
						</div>		
					</div>
				</div>
			</div>	


		@endif

	</div>


	<footer id="myFooter">
        @include('footer')
    </footer>

    <div id="fb-root" ></div>
		<script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = 'https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v3.0';
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>	


</body>
</html>
