<?php

class HackathonParticipant extends \Eloquent {
	protected $fillable = ['name', 'begins', 'ends', 'description'];

	protected $table = 'event_user';

	public function user()
	{
		return $this->belongsTo('User', 'user_id');
	}

	public function event()
	{
		return $this->belongsTo('Hackathon', 'event_id');
	}
}
