@extends('layouts.admin')

@section('content')
	<h2>Blog Posts</h2>
	<table id="blogposts" class="table table-striped table-bordered table-hover table-condensed" cellspacing="0" width="100%">
	  <thead>
		  <tr>
		  	<td><b>ID</b></td>
		  	<td><b>Blog</b></td>
		  	<td><b>Title</b></td>
		  	<td><b>Description</b></td>
		  	<td><b>Content</b></td>
		  	<td><b>Menu</b></td>
		  </tr>
	  </thead>
	  <tbody>
	  	@foreach($blogposts as $blogpost)
		  <tr>
		  	<td><a href="{{url('admin/blog/view/'.$blogpost->id)}}">{{$blogpost->id}}</a></td>
		  	<td>{{Blog::find($blogpost->blog_id)->name}}</td>
		  	<td>{{$blogpost->title}}</td>
		  	<td>{{$blogpost->description}}</td>
		  	<td>{{$blogpost->content}}</td>
		  	<td><a href="{{url('admin/blog/update/'.$blogpost->id)}}" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-pencil"></span></a>&nbsp;<a href="{{url('admin/blog/delete/'.$blogpost->id)}}" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span></a></td>
		  </tr>
		@endforeach
	  </tbody>
	</table>

@stop

@section('page_script')
<script>	
	$(document).ready(function() {
    	$('#blogposts').dataTable();
	} );
</script>
@stop

