<?php

class Event extends \Eloquent {
	protected $fillable = [];

	protected $table = 'events';

	public function getName()
	{
		return $this->name;
	}

	public function getBegins()
	{
		return $this->begins;
	}

	public function getEnds()
	{
		return $this->ends;
	}

	public function getOwner()
	{
		return $this->owner;
	}

	public function getDescription()
	{
		return $this->description;
	}

	public function getParticipants()
	{
		return $this->belongsToMany('User');
	}
}
