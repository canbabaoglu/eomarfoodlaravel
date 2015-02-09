<?php

class Lead extends \Eloquent {
	
	protected $fillable = [
		'name',
		'email',
		'phoneNo',
		'message'
	];
	
	public static $rules = [
		'name'         => 'required',
		'email'        => 'required|email',
		'phoneNo'      => 'required',
		'message_body' => 'required'
	];
}