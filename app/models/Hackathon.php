<?php

class Hackathon extends \Eloquent {
	protected $fillable = ['name', 'begins', 'ends', 'description'];

	protected $table = 'events';

	public function owner()
	{
		return $this->belongsTo('User', 'owner');
	}

	public function participants()
	{
		return $this->hasManyThrough('User', 'HackathonParticipant', 'event_id', 'id', 'user_id');
	}
}
