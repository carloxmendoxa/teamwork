<?php

class Teammember extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required|min:5'
	    'name'=> 'required|min:2',
	    'lastname'=> 'required|min:3'
	    ,'email'=> 'required|email'
	];

	// Don't forget to fill this array
	protected $fillable = ['name','lastname','email'];

}
