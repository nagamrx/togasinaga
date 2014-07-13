<?php

class BlogPost extends GenericModel {
	public $table = 'blog_posts';

	public $fillable = [
		'title',
		'description',
		'content',
		'blog_id'
	];

	public $rules = [
		'title'=>'required',
		'content'=>'required',
		'blog_id'=>'exists:blogs,id'
	];
}