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

	<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-121070627-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-121070627-1');
	</script>
	
	<title>{{$detailNavegador->title}}</title>
</head>
<body>
	@include('navbarYaravi')

	<div class="container" style="background: #EFF5FB;">
		@include('navbarNoticias')
		@yield('contenido')

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
