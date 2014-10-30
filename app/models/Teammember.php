<?php

class Teammember extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	    'name'=> 'required',
	    'lastname'=> 'required'
	    ,'email'=> 'required|email'
	];

	// Don't forget to fill this array
	protected $fillable = ['name','lastname','email'];

}