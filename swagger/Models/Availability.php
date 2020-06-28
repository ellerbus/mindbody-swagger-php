<?php

namespace App\MindBody\Models;

/**
 * A staff availability entry
 */
class Availability extends BaseModel
{
	/**
	 * The ID of the availability.
	 * 
	 * @var integer
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
	 * @var string
	 */
	public $startDateTime;
	/**
	 * The date and time the availability ends.
	 * 
	 * @var string
	 */
	public $endDateTime;
	/**
	 * The time of day that the last appointment can start.
	 * 
	 * @var string
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
			'Id' => 'id',
			'Staff' => ['staff', Staff::class],
			'SessionType' => ['sessionType', SessionType::class],
			'Programs' => ['programs', Program::class],
			'StartDateTime' => 'startDateTime',
			'EndDateTime' => 'endDateTime',
			'BookableEndDateTime' => 'bookableEndDateTime',
			'Location' => ['location', Location::class],
			];
	}

	protected function getOutputMap()
	{
		return [
			'id' => 'Id',
			'staff' => 'Staff',
			'sessionType' => 'SessionType',
			'programs' => 'Programs',
			'startDateTime' => 'StartDateTime',
			'endDateTime' => 'EndDateTime',
			'bookableEndDateTime' => 'BookableEndDateTime',
			'location' => 'Location',
			];
	}
}
