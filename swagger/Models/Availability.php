<?php

namespace App\Mindbody\Models;

/**
 * A staff availability entry
 */
class Availability extends BaseModel
{
	/**
	 * The ID of the availability.
	 * 
	 * @var integer format:int32
	 */
	public $id;
	/**
	 * Contains information about staff members.
	 * 
	 * @var Staff 
	 */
	public $staff;
	/**
	 * Contains information about the types of sessions.
	 * 
	 * @var SessionType 
	 */
	public $sessionType;
	/**
	 * Contains information about the programs.
	 * 
	 * @var Program[] 
	 */
	public $programs;
	/**
	 * The date and time the availability starts.
	 * 
	 * @var string format:date-time
	 */
	public $startDateTime;
	/**
	 * The date and time the availability ends.
	 * 
	 * @var string format:date-time
	 */
	public $endDateTime;
	/**
	 * The time of day that the last appointment can start.
	 * 
	 * @var string format:date-time
	 */
	public $bookableEndDateTime;
	/**
	 * Contains information about the location.
	 * 
	 * @var Location 
	 */
	public $location;

	protected function getInputMap()
	{
		return [
			'Id' => ['id', 'integer', 'int32'],
			'Staff' => ['staff', Staff::class, null],
			'SessionType' => ['sessionType', SessionType::class, null],
			'Programs' => ['programs', 'array', Program::class],
			'StartDateTime' => ['startDateTime', 'string', 'date-time'],
			'EndDateTime' => ['endDateTime', 'string', 'date-time'],
			'BookableEndDateTime' => ['bookableEndDateTime', 'string', 'date-time'],
			'Location' => ['location', Location::class, null],
			];
	}

	protected function getOutputMap()
	{
		return [
			'id' => ['Id', 'integer', 'int32'],
			'staff' => ['Staff', Staff::class, null],
			'sessionType' => ['SessionType', SessionType::class, null],
			'programs' => ['Programs', 'array', Program::class],
			'startDateTime' => ['StartDateTime', 'string', 'date-time'],
			'endDateTime' => ['EndDateTime', 'string', 'date-time'],
			'bookableEndDateTime' => ['BookableEndDateTime', 'string', 'date-time'],
			'location' => ['Location', Location::class, null],
			];
	}
}
