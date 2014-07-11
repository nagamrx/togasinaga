@extends('layouts.admin')

@section('content')
	<h2>Discussions</h2>
	<table id="discussions" class="table table-striped table-bordered table-hover table-condensed" cellspacing="0" width="100%">
	  <thead>
		  <tr>
		  	<td><b>ID</b></td>
		  	<td><b>Forum</b></td>
		  	<td><b>Host</b></td>
		  	<td><b>Title</b></td>
		  	<td><b>Description</b></td>
		  	<td><b>Content</b></td>
		  	<td><b>Menu</b></td>
		  </tr>
	  </thead>
	  <tbody>
	  	@foreach($discussions as $discussion)
		  <tr>
		  	<td><a href="{{url('admin/discussion/view/'.$discussion->id)}}">{{$discussion->id}}</a></td>
		  	<td>{{Forum::find($discussion->forum_id)->name}}</td>
		  	<td>{{User::find($discussion->host_id)->first_name}} {{User::find($discussion->host_id)->last_name}}</td>
		  	<td>{{$discussion->title}}</td>
		  	<td>{{$discussion->description}}</td>
		  	<td>{{$discussion->content}}</td>
		  	<td><a href="{{url('admin/discussion/update/'.$discussion->id)}}" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-pencil"></span></a>&nbsp;<a href="{{url('admin/discussion/delete/'.$discussion->id)}}" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span></a></td>
		  </tr>
		@endforeach
	  </tbody>
	</table>

@stop

@section('page_script')
<script>	
	$(document).ready(function() {
    	$('#discussions').dataTable();
	} );
</script>
@stop

