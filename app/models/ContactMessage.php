<?php

class ContactMessage extends GenericModel {
	public $table = 'contact_messages';

	public $fillable = [
		'sender_name',
		'sender_email',
		'content',
		'status'
	];

	public $rules = [
		'sender_name'=>'required',
		'sender_email'=> 'required|email',
		'content'=>'required'
	];
}