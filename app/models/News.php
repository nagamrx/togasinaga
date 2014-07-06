<?php

class News extends GenericModel {
	public $table = 'news';

	public $fillable = [
		'title',
		'content',
		'user_id',
		'flag'
	];

	public $rules = [
		'title'=>'required',
		'content'=>'required',
		'user_id'=>'exists:users,id',
	];
}