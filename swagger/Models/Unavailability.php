<?php

namespace App\MindBody\Models;

/**
 * no description available
 */
class Unavailability extends BaseModel
{
	/**
	 * The ID of the unavailability.
	 * 
	 * @var integer format:int32
	 */
	public $id;
	/**
	 * The date and time the unavailability starts.
	 * 
	 * @var string format:date-time
	 */
	public $startDateTime;
	/**
	 * The date and time the unavailability ends.
	 * 
	 * @var string format:date-time
	 */
	public $endDateTime;
	/**
	 * A description of the unavailability.
	 * 
	 * @var string 
	 */
	public $description;

	protected function getInputMap()
	{
		return [
			'Id' => ['id', 'integer', 'int32'],
			'StartDateTime' => ['startDateTime', 'string', 'date-time'],
			'EndDateTime' => ['endDateTime', 'string', 'date-time'],
			'Description' => ['description', 'string', null],
			];
	}

	protected function getOutputMap()
	{
		return [
			'id' => ['Id', 'integer', 'int32'],
			'startDateTime' => ['StartDateTime', 'string', 'date-time'],
			'endDateTime' => ['EndDateTime', 'string', 'date-time'],
			'description' => ['Description', 'string', null],
			];
	}
}
