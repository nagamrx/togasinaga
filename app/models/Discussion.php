<?php

class Discussion extends GenericModel {
	public $table = 'discussions';

	public $fillable = [
		'title',
		'description',
		'content',
		'host_id',
		'forum_id'
	];

	public $rules = [
		'title'=>'required',
		'content'=>'required',
		'host_id'=>'exists:users,id',
		'forum_id'=>'exists:forums,id'
	];
}