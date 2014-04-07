<?php

class Hackathon extends \Eloquent {
	protected $fillable = ['name', 'begins', 'ends', 'description'];

	protected $table = 'events';

	public function owner()
	{
		return $this->belongsTo('User');
	}

	public function participants()
	{
		return $this->belongsToMany('User');
	}
}
