@extends('layouts.admin')

@section('content')

	<h2>Contact Messages</h2>
	<table id="contactmessage" class="table table-striped table-bordered table-hover table-condensed" cellspacing="0" width="100%">
	  <thead>
		  <tr>
		  	<td><b>ID</b></td>
		  	<td><b>Sender Name</b></td>
		  	<td><b>Sender Email</b></td>
		  	<td><b>Content</b></td>
		  	<td><b>Status</b></td>
		  	<td><b>Menu</b></td>
		  </tr>
	  </thead>
	  <tbody>
	  	@foreach($contactmessages as $contactmessage)
		  <tr>
			<td>{{$contactmessage->id}}</td>
		  	<td>{{$contactmessage->sender_name}}</td>
		  	<td>{{$contactmessage->sender_email}}</td>
		  	<td>{{$contactmessage->content}}</td>
		  	<td>
		  		{{$contactmessage->status}}
			</td>
		  	<td><a href="{{url('admin/contactmessage/update/'.$contactmessage->id)}}" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-pencil"></span></a>&nbsp;<a href="{{url('admin/contactmessage/delete/'.$contactmessage->id)}}" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span></a></td>
		  </tr>
		@endforeach
	  </tbody>
	</table>

@stop


@section('page_script')
<script>	
	$(document).ready(function() {
    $('#contactmessage').dataTable();
} );
</script>
@stop
@stop