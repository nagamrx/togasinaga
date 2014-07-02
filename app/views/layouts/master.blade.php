<!DOCTYPE html>
<html lang="en">
<head>
	  <meta charset="utf-8">
	  <title>Togasinaga</title>
	  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	  <meta name="description" content="">
	  <meta name="author" content="">

	<link href="{{asset('landing/css/bootstrap.min.css')}}" rel="stylesheet" media="screen">
    <link href="{{asset('landing/css/sanspro-font.css')}}" rel='stylesheet' type='text/css'>
    <link href="{{asset('landing/css/roboto-font.css')}}" rel='stylesheet' type='text/css'>    
    <link href="{{asset('landing/css/style.css')}}" rel="stylesheet" media="screen">
  
</head>

<body>
	

	<div class="content">
		<div class="container well">
			@yield('content')
		</div>
	</div>

<script src="{{asset('landing/js/jquery.js')}}"></script>
<script src="{{asset('landing/js/bootstrap.min.js')}}"></script>
<script src="{{asset('landing/js/animatescroll.js')}}"></script>
<script src="{{asset('landing/js/scripts.js')}}"></script>
<script src="{{asset('landing/js/retina.min.js')}}"></script>

@yield('page_script')
</body>
</html>
