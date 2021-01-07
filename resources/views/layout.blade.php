<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="keywords" content="Radio Yaraví, Radio Yaravi, Radio, Yaravi, Radio Yaraví Arequipa, Radio Yaravi Arequipa, Arequipa">

	<meta name="robots" content="index, follow">
	<meta name="googlebot" content="index, follow">

    <meta property="fb:app_id" content="629367300738154" />
    <meta property="og:title" content="Radio Yaraví con Todas las Voces"/>
    <meta property="og:type" content="website" />
    <meta property="og:image" itemprop="image" content={{asset('storage/RadioYaravi.jpg')}}/>
    <meta property="og:site_name" content="Radio Yaraví" />
    <meta name="description" content="Radio Yaravi con Todas las Voces trasmite su señal a través de la Frecuencia Modulada 106.3 (FM) y Amplitud Modulada 930 (AM) y vía internet www.radioyaravi.org.pe con una amplia cobertura además contamos con una variada programación pensada en nuestro público con una diversidad de horarios"/>
    <meta name="og:description" content="Radio Yaravi con Todas las Voces trasmite su señal a través de la Frecuencia Modulada 106.3 (FM) y Amplitud Modulada 930 (AM) y vía internet www.radioyaravi.org.pe con una amplia cobertura además contamos con una variada programación pensada en nuestro público con una diversidad de horarios"/>

    <link rel="icon" href={{asset('storage/favicon.ico')}} type="image/x-icon" />

    <link rel="canonical" href="https://www.radioyaravi.org.pe">

    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">-->
    <script src="{{asset('js/app.js')}}"></script>

    <!--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>-->

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-121070627-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-121070627-1');
	</script>

	<!--<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>-->
	<!--<script>
	  (adsbygoogle = window.adsbygoogle || []).push({
	    google_ad_client: "ca-pub-8281363678805098",
	    enable_page_level_ads: true
	  });
	</script>-->

	<script 
		data-ad-client="ca-pub-8047009650931790" 
		async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js">
	</script>

	<!--<script type="text/javascript">
		function enableAutplay()
		{
			let audio = document.getElementById("myAudio");
			audio.autoplay = true;
			audio.load();

		};
	</script>-->
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:site" content="@RadioYaravi">
	<meta name="twitter:creator" content="@RadioYaravi">
	<meta name="twitter:domain" content="https://radioyaravi.org.pe">
	<meta name="twitter:image" content="https://e.rpp-noticias.io/medium/2018/11/01/382638_703680.jpg">
	<meta property="twitter:account_id" content="997311201095897089">


	<script charset="utf-8" src="https://platform.twitter.com/js/grid~moment~timeline~tweet.a26b00efbad7a82218338ff484d86e56.js"></script>
	<script charset="utf-8" src="https://platform.twitter.com/js/moment~timeline~tweet.50bff1a04f1f37b6a41fa15859518e07.js"></script>
	<script charset="utf-8" src="https://platform.twitter.com/js/tweet.7105d49c4a3cba9c5c6727b0e1a9eae8.js"></script>

	<title>Radio Yaraví Arequipa</title>
	
	<script async src="https://securepubads.g.doubleclick.net/tag/js/gpt.js"></script> 

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
						  <script>
						    googletag.cmd.push(function() { googletag.display('gpt_zocalo'); });
						  </script>
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
								<div id='gpt_zocalo' style="position: fixed; bottom: 0px; z-index: 99; top: auto; width: 100%;">
								  <script>
								    googletag.cmd.push(function() { googletag.display('gpt_zocalo'); });
								  </script>
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

    <div id="fb-root"></div>
		<script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = 'https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v3.0';
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>	

</body>
</html>

