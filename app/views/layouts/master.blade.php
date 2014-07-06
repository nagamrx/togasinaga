<!DOCTYPE html>
<html lang="en">
<head>
	  <meta charset="utf-8">
	  <title>Togasinaga</title>
	  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	  <meta name="description" content="">
	  <meta name="author" content="">

	<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" media="screen">
    <link href="{{asset('css/sanspro-font.css')}}" rel='stylesheet' type='text/css'>
    <link href="{{asset('css/roboto-font.css')}}" rel='stylesheet' type='text/css'>    
  
</head>

<body>
	

	<div class="content">
		<div class="container">
			@yield('content')
		</div>
	</div>

<script src="{{asset('landing/js/jquery.js')}}"></script>
<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>

@yield('page_script')
</body>
</html>
