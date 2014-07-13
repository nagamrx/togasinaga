<?php

class Blog extends GenericModel {
	public $table = 'blogs';

	public $fillable = [
		'name',
		'description',
		'background_image',
		'blogger_id'
	];

	public $rules = [
		'name'=>'required',
		'blogger_id'=>'exists:users,id'
	];
}