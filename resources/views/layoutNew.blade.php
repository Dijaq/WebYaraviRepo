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
    <meta property="og:image" content={{asset('storage/'.$detailNavegador->dirImage)}}/>
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

	<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	<script>
	  (adsbygoogle = window.adsbygoogle || []).push({
	    google_ad_client: "ca-pub-8281363678805098",
	    enable_page_level_ads: true
	  });
	</script>

	@if($detailnew->label->name == 'Regional')
		<!--ADS: Nota - regional-->

		<script async src="https://securepubads.g.doubleclick.net/tag/js/gpt.js"></script>

		<script>
		  window.googletag = window.googletag || {cmd: []};
		  googletag.cmd.push(function() {
		    googletag.defineSlot('/21907083702/yaravi/yaravi_rad_aqp_web_post_regional_top', [[970, 90], [970, 250], [300, 50], [300, 100], [728, 90], [320, 50], [1, 1], [320, 100]], 'gpt_top').addService(googletag.pubads());
			  googletag.defineSlot('/21907083702/yaravi/yaravi_rad_aqp_web_post_regional_laterall', [[120, 600], [160, 600]], 'gpt_laterall').addService(googletag.pubads());
		    googletag.defineSlot('/21907083702/yaravi/yaravi_rad_aqp_web_post_regional_lateralr', [[120, 600], [160, 600]], 'gpt_lateralr').addService(googletag.pubads());
		    googletag.defineSlot('/21907083702/yaravi/yaravi_rad_aqp_web_post_regional_caja1', [[255, 255], [300, 250], [300, 100], [320, 100], [300, 50], [320, 50], [300, 600]], 'gpt_caja1').addService(googletag.pubads());
		    googletag.defineSlot('/21907083702/yaravi/yaravi_rad_aqp_web_post_regional_caja2', [[300, 250], [300, 100], [320, 100], [300, 50], [320, 50], [300, 600]], 'gpt_caja2').addService(googletag.pubads());
		    googletag.defineSlot('/21907083702/yaravi/yaravi_rad_aqp_web_post_regional_inline', [1, 1], 'gpt_inline').addService(googletag.pubads());
		    googletag.defineSlot('/21907083702/yaravi/yaravi_rad_aqp_web_post_regional_vslider', [1, 1], 'gpt_vslider').addService(googletag.pubads());
		    googletag.defineSlot('/21907083702/yaravi/yaravi_rad_aqp_web_post_regional_zocalo', [[728, 90], [320, 50]], 'gpt_zocalo').addService(googletag.pubads());
		    googletag.pubads().enableSingleRequest();
		    googletag.pubads().collapseEmptyDivs();
		    googletag.pubads().setCentering(true);
		    googletag.enableServices();
		  });
		</script>

	@elseif($detailnew->label->name == 'Policial')

		<!--ADS: Nota - policial-->

		<script async src="https://securepubads.g.doubleclick.net/tag/js/gpt.js"></script>

		<script>
		  window.googletag = window.googletag || {cmd: []};
		  googletag.cmd.push(function() {
		    googletag.defineSlot('/21907083702/yaravi/yaravi_rad_aqp_web_post_policial_top', [[970, 90], [970, 250], [300, 50], [300, 100], [728, 90], [320, 50], [1, 1], [320, 100]], 'gpt_top').addService(googletag.pubads());
			  googletag.defineSlot('/21907083702/yaravi/yaravi_rad_aqp_web_post_policial_laterall', [[120, 600], [160, 600]], 'gpt_laterall').addService(googletag.pubads());
		    googletag.defineSlot('/21907083702/yaravi/yaravi_rad_aqp_web_post_policial_lateralr', [[120, 600], [160, 600]], 'gpt_lateralr').addService(googletag.pubads());
		    googletag.defineSlot('/21907083702/yaravi/yaravi_rad_aqp_web_post_policial_caja1', [[255, 255], [300, 250], [300, 100], [320, 100], [300, 50], [320, 50], [300, 600]], 'gpt_caja1').addService(googletag.pubads());
		    googletag.defineSlot('/21907083702/yaravi/yaravi_rad_aqp_web_post_policial_caja2', [[300, 250], [300, 100], [320, 100], [300, 50], [320, 50], [300, 600]], 'gpt_caja2').addService(googletag.pubads());
		    googletag.defineSlot('/21907083702/yaravi/yaravi_rad_aqp_web_post_policial_inline', [1, 1], 'gpt_inline').addService(googletag.pubads());
		    googletag.defineSlot('/21907083702/yaravi/yaravi_rad_aqp_web_post_policial_vslider', [1, 1], 'gpt_vslider').addService(googletag.pubads());
		    googletag.defineSlot('/21907083702/yaravi/yaravi_rad_aqp_web_post_policial_zocalo', [[728, 90], [320, 50]], 'gpt_zocalo').addService(googletag.pubads());
		    googletag.pubads().enableSingleRequest();
		    googletag.pubads().collapseEmptyDivs();
		    googletag.pubads().setCentering(true);
		    googletag.enableServices();
		  });
		</script>
		
	@elseif($detailnew->label->name == 'Internacional')

		<!--ADS: Nota - internacional-->

		<script async src="https://securepubads.g.doubleclick.net/tag/js/gpt.js"></script>

		<script>
		  window.googletag = window.googletag || {cmd: []};
		  googletag.cmd.push(function() {
		    googletag.defineSlot('/21907083702/yaravi/yaravi_rad_aqp_web_post_internacional_top', [[970, 90], [970, 250], [300, 50], [300, 100], [728, 90], [320, 50], [1, 1], [320, 100]], 'gpt_top').addService(googletag.pubads());
			  googletag.defineSlot('/21907083702/yaravi/yaravi_rad_aqp_web_post_internacional_laterall', [[120, 600], [160, 600]], 'gpt_laterall').addService(googletag.pubads());
		    googletag.defineSlot('/21907083702/yaravi/yaravi_rad_aqp_web_post_internacional_lateralr', [[120, 600], [160, 600]], 'gpt_lateralr').addService(googletag.pubads());
		    googletag.defineSlot('/21907083702/yaravi/yaravi_rad_aqp_web_post_internacional_caja1', [[255, 255], [300, 250], [300, 100], [320, 100], [300, 50], [320, 50], [300, 600]], 'gpt_caja1').addService(googletag.pubads());
		    googletag.defineSlot('/21907083702/yaravi/yaravi_rad_aqp_web_post_internacional_caja2', [[300, 250], [300, 100], [320, 100], [300, 50], [320, 50], [300, 600]], 'gpt_caja2').addService(googletag.pubads());
		    googletag.defineSlot('/21907083702/yaravi/yaravi_rad_aqp_web_post_internacional_inline', [1, 1], 'gpt_inline').addService(googletag.pubads());
		    googletag.defineSlot('/21907083702/yaravi/yaravi_rad_aqp_web_post_internacional_vslider', [1, 1], 'gpt_vslider').addService(googletag.pubads());
		    googletag.defineSlot('/21907083702/yaravi/yaravi_rad_aqp_web_post_internacional_zocalo', [[728, 90], [320, 50]], 'gpt_zocalo').addService(googletag.pubads());
		    googletag.pubads().enableSingleRequest();
		    googletag.pubads().collapseEmptyDivs();
		    googletag.pubads().setCentering(true);
		    googletag.enableServices();
		  });
		</script>


	@elseif($detailnew->label->name == 'Deportes')	

		<!--ADS: Nota - deportes-->

		<script async src="https://securepubads.g.doubleclick.net/tag/js/gpt.js"></script>

		<script>
		  window.googletag = window.googletag || {cmd: []};
		  googletag.cmd.push(function() {
		    googletag.defineSlot('/21907083702/yaravi/yaravi_rad_aqp_web_post_deportes_top', [[970, 90], [970, 250], [300, 50], [300, 100], [728, 90], [320, 50], [1, 1], [320, 100]], 'gpt_top').addService(googletag.pubads());
			  googletag.defineSlot('/21907083702/yaravi/yaravi_rad_aqp_web_post_deportes_laterall', [[120, 600], [160, 600]], 'gpt_laterall').addService(googletag.pubads());
		    googletag.defineSlot('/21907083702/yaravi/yaravi_rad_aqp_web_post_deportes_lateralr', [[120, 600], [160, 600]], 'gpt_lateralr').addService(googletag.pubads());
		    googletag.defineSlot('/21907083702/yaravi/yaravi_rad_aqp_web_post_deportes_caja1', [[255, 255], [300, 250], [300, 100], [320, 100], [300, 50], [320, 50], [300, 600]], 'gpt_caja1').addService(googletag.pubads());
		    googletag.defineSlot('/21907083702/yaravi/yaravi_rad_aqp_web_post_deportes_caja2', [[300, 250], [300, 100], [320, 100], [300, 50], [320, 50], [300, 600]], 'gpt_caja2').addService(googletag.pubads());
		    googletag.defineSlot('/21907083702/yaravi/yaravi_rad_aqp_web_post_deportes_inline', [1, 1], 'gpt_inline').addService(googletag.pubads());
		    googletag.defineSlot('/21907083702/yaravi/yaravi_rad_aqp_web_post_deportes_vslider', [1, 1], 'gpt_vslider').addService(googletag.pubads());
		    googletag.defineSlot('/21907083702/yaravi/yaravi_rad_aqp_web_post_deportes_zocalo', [[728, 90], [320, 50]], 'gpt_zocalo').addService(googletag.pubads());
		    googletag.pubads().enableSingleRequest();
		    googletag.pubads().collapseEmptyDivs();
		    googletag.pubads().setCentering(true);
		    googletag.enableServices();
		  });
		</script>
	@elseif($detailnew->label->name == 'Nacional')
		<!--ADS: Nota - nacional-->

		<script async src="https://securepubads.g.doubleclick.net/tag/js/gpt.js"></script>

		<script>
		  window.googletag = window.googletag || {cmd: []};
		  googletag.cmd.push(function() {
		    googletag.defineSlot('/21907083702/yaravi/yaravi_rad_aqp_web_post_nacional_top', [[970, 90], [970, 250], [300, 50], [300, 100], [728, 90], [320, 50], [1, 1], [320, 100]], 'gpt_top').addService(googletag.pubads());
			  googletag.defineSlot('/21907083702/yaravi/yaravi_rad_aqp_web_post_nacional_laterall', [[120, 600], [160, 600]], 'gpt_laterall').addService(googletag.pubads());
		    googletag.defineSlot('/21907083702/yaravi/yaravi_rad_aqp_web_post_nacional_lateralr', [[120, 600], [160, 600]], 'gpt_lateralr').addService(googletag.pubads());
		    googletag.defineSlot('/21907083702/yaravi/yaravi_rad_aqp_web_post_nacional_caja1', [[255, 255], [300, 250], [300, 100], [320, 100], [300, 50], [320, 50], [300, 600]], 'gpt_caja1').addService(googletag.pubads());
		    googletag.defineSlot('/21907083702/yaravi/yaravi_rad_aqp_web_post_nacional_caja2', [[300, 250], [300, 100], [320, 100], [300, 50], [320, 50], [300, 600]], 'gpt_caja2').addService(googletag.pubads());
		    googletag.defineSlot('/21907083702/yaravi/yaravi_rad_aqp_web_post_nacional_inline', [1, 1], 'gpt_inline').addService(googletag.pubads());
		    googletag.defineSlot('/21907083702/yaravi/yaravi_rad_aqp_web_post_nacional_vslider', [1, 1], 'gpt_vslider').addService(googletag.pubads());
		    googletag.defineSlot('/21907083702/yaravi/yaravi_rad_aqp_web_post_nacional_zocalo', [[728, 90], [320, 50]], 'gpt_zocalo').addService(googletag.pubads());
		    googletag.pubads().enableSingleRequest();
		    googletag.pubads().collapseEmptyDivs();
		    googletag.pubads().setCentering(true);
		    googletag.enableServices();
		  });
		</script>
	@elseif($detailnew->label->name == 'Conflicto Social')
		<!--ADS: Nota - tiamaria-->

		<script async src="https://securepubads.g.doubleclick.net/tag/js/gpt.js"></script>

	
		<script>
		  window.googletag = window.googletag || {cmd: []};
		  googletag.cmd.push(function() {
		    googletag.defineSlot('/21907083702/yaravi/yaravi_rad_aqp_web_post_tiamaria_top', [[970, 90], [970, 250], [300, 50], [300, 100], [728, 90], [320, 50], [1, 1], [320, 100]], 'gpt_top').addService(googletag.pubads());
			  googletag.defineSlot('/21907083702/yaravi/yaravi_rad_aqp_web_post_tiamaria_laterall', [[120, 600], [160, 600]], 'gpt_laterall').addService(googletag.pubads());
		    googletag.defineSlot('/21907083702/yaravi/yaravi_rad_aqp_web_post_tiamaria_lateralr', [[120, 600], [160, 600]], 'gpt_lateralr').addService(googletag.pubads());
		    googletag.defineSlot('/21907083702/yaravi/yaravi_rad_aqp_web_post_tiamaria_caja1', [[255, 255], [300, 250], [300, 100], [320, 100], [300, 50], [320, 50], [300, 600]], 'gpt_caja1').addService(googletag.pubads());
		    googletag.defineSlot('/21907083702/yaravi/yaravi_rad_aqp_web_post_tiamaria_caja2', [[300, 250], [300, 100], [320, 100], [300, 50], [320, 50], [300, 600]], 'gpt_caja2').addService(googletag.pubads());
		    googletag.defineSlot('/21907083702/yaravi/yaravi_rad_aqp_web_post_tiamaria_inline', [1, 1], 'gpt_inline').addService(googletag.pubads());
		    googletag.defineSlot('/21907083702/yaravi/yaravi_rad_aqp_web_post_tiamaria_vslider', [1, 1], 'gpt_vslider').addService(googletag.pubads());
		    googletag.defineSlot('/21907083702/yaravi/yaravi_rad_aqp_web_post_tiamaria_zocalo', [[728, 90], [320, 50]], 'gpt_zocalo').addService(googletag.pubads());
		    googletag.pubads().enableSingleRequest();
		    googletag.pubads().collapseEmptyDivs();
		    googletag.pubads().setCentering(true);
		    googletag.enableServices();
		  });
		</script>
	@elseif($detailnew->label->name == 'Político')
		<!--ADS: Nota - politico-->

		<script async src="https://securepubads.g.doubleclick.net/tag/js/gpt.js"></script>

		<script>
		  window.googletag = window.googletag || {cmd: []};
		  googletag.cmd.push(function() {
		    googletag.defineSlot('/21907083702/yaravi/yaravi_rad_aqp_web_post_politico_top', [[970, 90], [970, 250], [300, 50], [300, 100], [728, 90], [320, 50], [1, 1], [320, 100]], 'gpt_top').addService(googletag.pubads());
			  googletag.defineSlot('/21907083702/yaravi/yaravi_rad_aqp_web_post_politico_laterall', [[120, 600], [160, 600]], 'gpt_laterall').addService(googletag.pubads());
		    googletag.defineSlot('/21907083702/yaravi/yaravi_rad_aqp_web_post_politico_lateralr', [[120, 600], [160, 600]], 'gpt_lateralr').addService(googletag.pubads());
		    googletag.defineSlot('/21907083702/yaravi/yaravi_rad_aqp_web_post_politico_caja1', [[255, 255], [300, 250], [300, 100], [320, 100], [300, 50], [320, 50], [300, 600]], 'gpt_caja1').addService(googletag.pubads());
		    googletag.defineSlot('/21907083702/yaravi/yaravi_rad_aqp_web_post_politico_caja2', [[300, 250], [300, 100], [320, 100], [300, 50], [320, 50], [300, 600]], 'gpt_caja2').addService(googletag.pubads());
		    googletag.defineSlot('/21907083702/yaravi/yaravi_rad_aqp_web_post_politico_inline', [1, 1], 'gpt_inline').addService(googletag.pubads());
		    googletag.defineSlot('/21907083702/yaravi/yaravi_rad_aqp_web_post_politico_vslider', [1, 1], 'gpt_vslider').addService(googletag.pubads());
		    googletag.defineSlot('/21907083702/yaravi/yaravi_rad_aqp_web_post_politico_zocalo', [[728, 90], [320, 50]], 'gpt_zocalo').addService(googletag.pubads());
		    googletag.pubads().enableSingleRequest();
		    googletag.pubads().collapseEmptyDivs();
		    googletag.pubads().setCentering(true);
		    googletag.enableServices();
		  });
		</script>
	@else
		<!--No incluido-->
	@endif


	
	<title>{{$detailNavegador->title}}</title>
</head>
<body>
		@include('navbarYaravi')

	<div class="container-fluid" style="background: #EFF5FB; max-width: 1500px; padding: 0px;">

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
						  <script>
						    googletag.cmd.push(function() { googletag.display('gpt_laterall'); });
						  </script>
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
					  		<script>
					    		googletag.cmd.push(function() { googletag.display('gpt_lateralr'); });
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

		<!-- advertising hJgZtajKuG4Wbsob_yCwAOZOBFS9ySG9NUI2SV5-4oc0HbYLO8mi9y5GJvZPgffykLNKKvEMpwrxRFt_vKXohw==-->
		<!--<script data-cfasync="false"  id="clevernt" type="text/javascript">
						 (function (document, window) {
	        var c = document.createElement("script");
	        c.type = "text/javascript"; c.async = !0; c.id = "CleverNTLoader33924";  c.setAttribute("data-target",window.name); c.setAttribute("data-callback","put-your-callback-macro-here");
	        c.src = "//clevernt.com/scripts/92e369e005fdd250dea54fa357d0e424.min.js?20190611=" + Math.floor((new Date).getTime());
	        var a = !1;
	        try {
	            a = parent.document.getElementsByTagName("script")[0] || document.getElementsByTagName("script")[0];
	        } catch (e) {
	            a = !1;
	        }
	        a || ( a = document.getElementsByTagName("head")[0] || document.getElementsByTagName("body")[0]);
	        a.parentNode.insertBefore(c, a);
	    })(document, window);
	                        </script>-->
	                                <!-- end advertising -->

</body>
</html>
