@extends('layouts.admin')

@section('content')
	<h2>Forums</h2>
	<table id="forums" class="table table-striped table-bordered table-hover table-condensed" cellspacing="0" width="100%">
	  <thead>
		  <tr>
		  	<td><b>ID</b></td>
		  	<td><b>Name</b></td>
		  	<td><b>Moderator</b></td>
		  	<td><b>Description</b></td>
		  	<td><b>Menu</b></td>
		  </tr>
	  </thead>
	  <tbody>
	  	@foreach($forums as $forum)
		  <tr>
		  	<td><a href="{{url('admin/forum/view/'.$forum->id)}}">{{$forum->id}}</a></td>
		  	<td>{{$forum->name}}</td>
		  	<td>{{User::find($forum->moderator_id)->first_name}} {{User::find($forum->moderator_id)->last_name}}</td>
		  	<td>{{$forum->description}}</td>
		  	<td><a href="{{url('admin/forum/update/'.$forum->id)}}" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-pencil"></span></a>&nbsp;<a href="{{url('admin/forum/delete/'.$forum->id)}}" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span></a></td>
		  </tr>
		@endforeach
	  </tbody>
	</table>

@stop

@section('page_script')
<script>	
	$(document).ready(function() {
    	$('#forums').dataTable();
	} );
</script>
@stop

