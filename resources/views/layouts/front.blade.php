<!DOCTYPE html>
<html lang="en">
<head>
<title>Currículum Vitae Andrés Vega</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Currículum Vitae, CV, Andrés Vega, Web Developer, Desktop Application Developer, Game Developer, Systems Engineer, Desarrollador Web, Desarrollador De Aplicaciones Para Escritorio, Desarrollador de Videojuegos, Ingeniero de Sistemas" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<!-- biblioteca usada para la pagina de carga-->
<link href="/css/bootstrap.min.css" type="text/css" rel="stylesheet" media="all">
<link href="/css/font-awesome.css" rel="stylesheet">		<!-- font-awesome icons --> 
<link href="/css/estilos.css" rel="stylesheet">

<!-- //Custom Theme files --> 
<!-- js -->
<script src="/js/jquery-2.2.3.min.js"></script> 
<!-- //js -->
<!-- web-fonts -->   
<link href="//fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Julius+Sans+One&amp;subset=latin-ext" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- //web-fonts -->
</head>
<body>
	<div class="preload">
		<div class="col-md-12">
			<h1>Loading the awesome...</h1>
			<img src="/images/spinner-preloader.gif" alt="Preload image">
		</div>		
	</div>
	<div class="full-contenido">
		@yield('content')
	</div>	
	<!-- codigo preload -->
	<script type="text/javascript">
		$(function(){
			
			$(".preload").fadeOut(500, function() {
				$(".full-contenido").fadeIn(1000);
			});
			
		});
	</script>
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/TimelineMax.min.js"></script>
    <script src="/js/TweenMax.min.js"></script>
    <script src="/js/ScrollMagic.min.js"></script>
    <script src="/js/animation.gsap.min.js"></script>
    <script src="/js/jquery.drawsvg.js"></script>
    <script src="/js/mijs.js?2"></script>
</body>
</html>