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
    <link href="{{asset('datatable/css/jquery.dataTables.min.css')}}" rel='stylesheet' type='text/css'>
    <link href="{{asset('datatable/css/jquery.dataTables_themeroller.min.css')}}" rel='stylesheet' type='text/css'>

  
</head>

<body>
	<nav class="navbar navbar-default navbar-inverse" role="navigation">
		<div class="container">
			<div class="navbar-header">
				 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button> <a class="navbar-brand" href="#">Togasinaga</a>
			</div>
			
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				
				<form class="navbar-form navbar-left" role="search">
					<div class="form-group">

						<input id="typeahead" type="text" data-provide="typeahead" autocomplete="off">
					
					</div> <button type="submit" class="btn btn-default">Submit</button>
				</form>
				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown">
						 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Hello, <b>{{Auth::user()->first_name}}!</b><strong class="caret"></strong></a>
						<ul class="dropdown-menu">
							<li>
								<a href="{{url('user/showprofile/'.Auth::user()->id)}}">Profile</a>
							</li>
							<li>
								<a href="{{url('admin/user/messages')}}">Inbox</a>
							</li>
							<li>
								<a href="#">Settings</a>
							</li>
							<li class="divider">
							</li>
							<li>
								<a href="{{url('logout')}}">Logout</a>
							</li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-2">
					<ul class="list-group">
					  <a href="{{url('admin/user')}}"><li class="list-group-item">User</li></a>
					  <a href="{{url('admin/contactmessage')}}"><li class="list-group-item">Contact Message</li></a>
					  <a href="{{url('admin/news')}}"><li class="list-group-item">News</li></a>
					  <a href="{{url('admin/forum')}}"><li class="list-group-item">Forums</li></a>
					  <a href="{{url('admin/discussion')}}"><li class="list-group-item">Discussions</li></a>
					  <a href="{{url('admin/discussioncomment')}}"><li class="list-group-item">Discussion Comments</li></a>
					  <li class="list-group-item">Vestibulum at eros</li>
					</ul>
				</div>
				<div class="col-md-10">
					@yield('content')
				</div>
			</div>
		</div>
	</div>

<script type="text/javascript" src="{{asset('datatable/js/jquery-1.11.1.min.js')}}"></script>
<script type="text/javascript" src="{{asset('datatable/js/jquery-ui.js')}}"></script>
<script type="text/javascript" src="{{asset('datatable/js/jquery.dataTables.min.js')}}"></script>
<script type="text/javascript" src="{{asset('datatable/js/jquery.jeditable.js')}}"></script>
<script type="text/javascript" src="{{asset('datatable/js/jquery.dataTables.editable.js')}}"></script>
<script type="text/javascript" src="{{asset('datatable/js/jquery.validate.js')}}"></script>

<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('typeahead/js/bootstrap3-typeahead.min.js')}}"></script>

@yield('page_script')
</body>
</html>
