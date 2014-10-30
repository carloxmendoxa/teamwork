<?php

class Task extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	    'title' => 'required|min:5', 
	    'description' => 'required|min:5', 
	    'duration' => 'required|numeric', 
	    'startDate' => 'required|date', 
	    'endDate' => 'required|date', 
	    'statusTask' => 'required|numeric'
	];

	// Don't forget to fill this array
	protected $fillable = ['title', 'description', 'duration', 'startDate', 'endDate', 'statusTask'];

}
