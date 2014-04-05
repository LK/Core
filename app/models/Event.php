<?php

class Event extends \Eloquent {
	protected $fillable = [];

	protected $table = 'events';

	/**
	 * Get the event's name.
	 *
	 * @return string
	 */
	public function getName()
	{
		return $this->name;
	}

	/**
	 * Get the time that the event begins
	 *
	 * @return datetime
	 */
	public function getBegins()
	{
		return $this->begins;
	}

	/**
	 * Get the time that the event ends
	 *
	 * @return datetime
	 */
	public function getEnds()
	{
		return $this->ends;
	}

	/**
	 * Get the event's owner
	 *
	 * @return integer
	 */
	public function getOwner()
	{
		return $this->owner;
	}

	/**
	 * Get the event's description
	 *
	 * @return string
	 */
	public function getDescription()
	{
		return $this->description;
	}

	/**
	 * Get the event's participants
	 *
	 * @return array
	 */
	public function getParticipants()
	{
		return $this->belongsToMany('User');
	}
}
