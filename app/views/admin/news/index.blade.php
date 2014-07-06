@extends('layouts.admin')

@section('content')
	<h2>News</h2>
	<table id="news" class="table table-striped table-bordered table-hover table-condensed" cellspacing="0" width="100%">
	  <thead>
		  <tr>
		  	<td><b>ID</b></td>
		  	<td><b>Title</b></td>
		  	<td><b>Content</b></td>
		  	<td><b>User</b></td>
		  	<td><b>Flags</b></td>
		  	<td><b>Menu</b></td>
		  	<td><b>Flag</b></td>
		  </tr>
	  </thead>
	  <tbody>
	  	@foreach($news as $ne)
		  <tr>
		  	<td><a href="{{url('admin/news/view/'.$ne->id)}}">{{$ne->id}}</a></td>
		  	<td>{{$ne->title}}</td>
		  	<td>{{$ne->content}}</td>
		  	<td>{{User::find($ne->user_id)->first_name}} {{User::find($ne->user_id)->last_name}}</td>
		  	<td>{{$ne->flag}}</td>
		  	<td><a href="{{url('admin/news/update/'.$ne->id)}}" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-pencil"></span></a>&nbsp;<a href="{{url('admin/news/delete/'.$ne->id)}}" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span></a></td>
		  	<td><a href="{{url('admin/news/flag/'.$ne->id)}}" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-flag"></span></a></td>
		  </tr>
		@endforeach
	  </tbody>
	</table>

@stop

@section('page_script')
<script>	
	$(document).ready(function() {
    	$('#news').dataTable();
	} );
</script>
@stop

