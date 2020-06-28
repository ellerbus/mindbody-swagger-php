<?php

namespace App\MindBody\Models;

/**
 * no description available
 */
class TimeCardEvent extends BaseModel
{
	/**
	 * The ID of the requested staff member.
	 * 
	 * @var integer
	 */
	public $staffId;
	/**
	 * The staff member’s job title.
	 * 
	 * @var string
	 */
	public $task;
	/**
	 * The time that the staff member started the job task.
	 * 
	 * @var string
	 */
	public $timeIn;
	/**
	 * The time that the staff member stopped doing the job task.
	 * 
	 * @var string
	 */
	public $timeOut;
	/**
	 * The number of hours on this time card, rounded to the nearest fourth
	 * decimal place.
	 * 
	 * @var number
	 */
	public $hours;
	/**
	 * The hourly rate the business pays this staff for this `Task`.
	 * 
	 * @var number
	 */
	public $hourlyRate;
	/**
	 * The total amount earned by the staff member for this time card entry.
	 * 
	 * @var number
	 */
	public $earnings;
}
