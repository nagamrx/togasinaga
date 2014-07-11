@extends('layouts.admin')

@section('content')
	<h2>Discussion Comments</h2>
	<table id="discussioncomments" class="table table-striped table-bordered table-hover table-condensed" cellspacing="0" width="100%">
	  <thead>
		  <tr>
		  	<td><b>ID</b></td>
		  	<td><b>Commenter</b></td>
		  	<td><b>Discussion</b></td>
		  	<td><b>Content</b></td>
		  	<td><b>Parent ID</b></td>
		  	<td><b>Depth</b></td>
		  	<td><b>Flag</b></td>
		  	<td><b>Menu</b></td>
		  </tr>
	  </thead>
	  <tbody>
	  	@foreach($discussioncomments as $discussioncomment)
		  <tr>
		  	<td><a href="{{url('admin/forum/view/'.$discussioncomment->id)}}">{{$discussioncomment->id}}</a></td>
		  	<td>{{User::find($discussioncomment->commenter_id)->first_name}} {{User::find($discussioncomment->commenter_id)->last_name}}</td>
		  	<td>{{Discussion::find($discussioncomment->discussion_id)->title}}</td>
		  	<td>{{$discussioncomment->content}}</td>
		  	<td>{{$discussioncomment->parent_id}}</td>
		  	<td>{{$discussioncomment->depth}}</td>
		  	<td>{{$discussioncomment->flag}}</td>
		  	<td><a href="{{url('admin/forum/update/'.$discussioncomment->id)}}" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-pencil"></span></a>&nbsp;<a href="{{url('admin/forum/delete/'.$discussioncomment->id)}}" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span></a></td>
		  </tr>
		@endforeach
	  </tbody>
	</table>

@stop

@section('page_script')
<script>	
	$(document).ready(function() {
    	$('#discussioncomments').dataTable();
	} );
</script>
@stop

