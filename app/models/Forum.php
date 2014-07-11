<?php

class Forum extends GenericModel {
	public $table = 'forums';

	public $fillable = [
		'name',
		'moderator_id',
		'description',
		'is_public'
	];

	public $rules = [
		'name'=>'required',
		'moderator_id'=>'exists:users,id'
	];
}