@extends('layouts.master')

@section('content')
@include('layouts.guest_nav')
<div class="col-md-3">
	@foreach($bposts as $bpost)
	<div class="row">
		<h4>{{$bpost->title}}</h4><br>
		<h5>Disurat di <strong>{{Blog::find($bpost->blog_id)->name}}</strong></h5><br>
		<h6><i>{{$bpost->description}}</i></h6><br>
	</div>
	@endforeach
</div>
<div class="col-md-5">
	@foreach($news as $ne)
	<div class="row">
		<h3>{{$ne->title}}</h3><br>
		<h6>Posted By: {{User::find($ne->user_id)->first_name}} {{User::find($ne->user_id)->last_name}}</h6><br>
		<p>{{$ne->content}}</p>
	</div>
	@endforeach
</div>
<div class="col-md-4">
	<div class="row">
		<h4>Website na Terkait</h4>
		<ul>
			<li> pptsb.go.id</li>
			<li> togasinaga.blogspot.com</li>
		</ul>
	</div>
	@foreach($dcomments as $comment)
	<div class="row">
		<h4>Komentar sian {{User::find($comment->commenter_id)->first_name}} {{User::find($comment->commenter_id)->last_name}} di {{Discussion::find($comment->discussion_id)->title}} :</h4><br>
		<p>{{$comment->content}}</p>
	</div>
	@endforeach
</div>

@stop

@section('page_script')

@stop
