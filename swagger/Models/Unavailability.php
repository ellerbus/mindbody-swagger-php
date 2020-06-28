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
	 * @var integer
	 */
	public $id;
	/**
	 * The date and time the unavailability starts.
	 * 
	 * @var string
	 */
	public $startDateTime;
	/**
	 * The date and time the unavailability ends.
	 * 
	 * @var string
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
			'Id' => 'id',
			'StartDateTime' => 'startDateTime',
			'EndDateTime' => 'endDateTime',
			'Description' => 'description',
			];
	}

	protected function getOutputMap()
	{
		return [
			'id' => 'Id',
			'startDateTime' => 'StartDateTime',
			'endDateTime' => 'EndDateTime',
			'description' => 'Description',
			];
	}
}
