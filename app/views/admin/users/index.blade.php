@extends('layouts.admin')

@section('content')
	<h2>Users</h2>
	<table id="user" class="table table-striped table-bordered table-hover table-condensed" cellspacing="0" width="100%">
	  <thead>
		  <tr>
		  	<td><b>ID</b></td>
		  	<td><b>Name</b></td>
		  	<td><b>Email</b></td>
		  	<td><b>Phone Number</b></td>
		  	<td><b>Registration Date</b></td>
		  	<td><b>Active</b></td>
		  	<td><b>Last Visit</b></td>
		  	<td><b>Menu</b></td>
		  	<td><b>Flag</b></td>
		  </tr>
	  </thead>
	  <tbody>
	  	@foreach($users as $user)
		  <tr>
		  	<td><a href="{{url('admin/user/view/'.$user->id)}}">{{$user->id}}</a></td>
		  	<td>{{$user->first_name}} {{$user->last_name}}</td>
		  	<td>{{$user->email}}</td>
		  	<td>{{$user->phone_number}}</td>
		  	<td>{{date("d F Y, G:i:s", strtotime($user->registration_date))}}</td>
		  	<td>
		  		@if ($user->is_active ===1)
		  			<a href="{{url('admin/user/activate/'.$user->id)}}"><img widht="5%" height="5%" src="{{asset('img/tick1.png')}}" /></a>
		  		@else
		  			<a href="{{url('admin/user/activate/'.$user->id)}}"><img widht="5%" height="5%" src="{{asset('img/tick0.png')}}" /></a>
		  		@endif
		  	</td>
		  	<td>{{$user->last_visit}}</td>
		  	<td><a href="{{url('admin/user/update/'.$user->id)}}" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-pencil"></span></a>&nbsp;<a href="{{url('admin/user/delete/'.$user->id)}}" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span></a></td>
		  	<td><a href="{{url('admin/user/flag/'.$user->id)}}" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-flag"></span></a></td>
		  </tr>
		@endforeach
	  </tbody>
	</table>

@stop

@section('page_script')
<script>	
	$(document).ready(function() {
    	$('#user').dataTable();
	} );
</script>
@stop

