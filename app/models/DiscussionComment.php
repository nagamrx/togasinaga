<?php

class DiscussionComment extends GenericModel {
	public $table = 'discussion_comments';

	public $fillable = [
		'content',
		'parent_id',
		'flag',
		'depth',
		'discussion_id',
		'commenter_id'
	];

	public $rules = [
		'content'=>'required',
		'discussion_id'=>'exists:dicsussions,id',
		'commenter_id'=>'exists:users,id'
	];
}