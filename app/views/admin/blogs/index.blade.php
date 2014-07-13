@extends('layouts.admin')

@section('content')
	<h2>Blogs</h2>
	<table id="blogs" class="table table-striped table-bordered table-hover table-condensed" cellspacing="0" width="100%">
	  <thead>
		  <tr>
		  	<td><b>ID</b></td>
		  	<td><b>Owner</b></td>
		  	<td><b>Name</b></td>
		  	<td><b>Description</b></td>
		  	<td><b>Background Image</b></td>
		  	<td><b>Menu</b></td>
		  </tr>
	  </thead>
	  <tbody>
	  	@foreach($blogs as $blog)
		  <tr>
		  	<td><a href="{{url('admin/blog/view/'.$blog->id)}}">{{$blog->id}}</a></td>
		  	<td>{{User::find($blog->blogger_id)->first_name}} {{User::find($blog->blogger_id)->last_name}}</td>
		  	<td>{{$blog->name}}</td>
		  	<td>{{$blog->description}}</td>
		  	<td>{{$blog->background_image}}</td>
		  	<td><a href="{{url('admin/blog/update/'.$blog->id)}}" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-pencil"></span></a>&nbsp;<a href="{{url('admin/blog/delete/'.$blog->id)}}" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span></a></td>
		  </tr>
		@endforeach
	  </tbody>
	</table>

@stop

@section('page_script')
<script>	
	$(document).ready(function() {
    	$('#blogs').dataTable();
	} );
</script>
@stop

