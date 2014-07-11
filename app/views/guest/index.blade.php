@extends('layouts.master')

@section('content')
@include('layouts.guest_nav')
<div class="col-md-3">

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

</div>

@stop

@section('page_script')

@stop
