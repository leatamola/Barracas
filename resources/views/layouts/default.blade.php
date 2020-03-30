<!DOCTYPE html>
<html lang="es">
  <head>
  	@yield('title')
  	<meta charset="UTF-8">
  	<meta name="description" content=" Divisima | eCommerce Template">
  	<meta name="keywords" content="divisima, eCommerce, creative, html">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
  	<!-- Favicon -->
  	<link href="img/favicon.ico" rel="shortcut icon"/>

  	<!-- Google Font -->
  	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,300i,400,400i,700,700i" rel="stylesheet">


  	<!-- Stylesheets -->
  	<link rel="stylesheet" href="/css/bootstrap.min.css"/>
  	<link rel="stylesheet" href="/css/font-awesome.min.css"/>
  	<link rel="stylesheet" href="/css/flaticon.css"/>
  	<link rel="stylesheet" href="/css/slicknav.min.css"/>
  	<link rel="stylesheet" href="/css/jquery-ui.min.css"/>
  	<link rel="stylesheet" href="/css/owl.carousel.min.css"/>
  	<link rel="stylesheet" href="/css/animate.css"/>
  	<link rel="stylesheet" href="/css/style.css"/>
  	<link rel="stylesheet" href="/css/main.css"/>


  </head>
  <body>
    @yield('header')

    @yield('main')

    @yield('footer')

  <!--====== Javascripts & Jquery ======-->
  <script src="/js/jquery-3.2.1.min.js"></script>
  <script src="/js/bootstrap.min.js"></script>
  <script src="/js/jquery.slicknav.min.js"></script>
  <script src="/js/owl.carousel.min.js"></script>
  <script src="/js/jquery.nicescroll.min.js"></script>
  <script src="/js/jquery.zoom.min.js"></script>
  <script src="/js/jquery-ui.min.js"></script>
  <script src="/js/main.js"></script>

  </body>
</html>
