<?php

class Task extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = ['title', 'description', 'duration', 'startDate', 'endDate', 'statusTask'];

}