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
	 * @var integer format:int64
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
	 * @var string format:date-time
	 */
	public $timeIn;
	/**
	 * The time that the staff member stopped doing the job task.
	 * 
	 * @var string format:date-time
	 */
	public $timeOut;
	/**
	 * The number of hours on this time card, rounded to the nearest fourth
	 * decimal place.
	 * 
	 * @var number format:double
	 */
	public $hours;
	/**
	 * The hourly rate the business pays this staff for this `Task`.
	 * 
	 * @var number format:double
	 */
	public $hourlyRate;
	/**
	 * The total amount earned by the staff member for this time card entry.
	 * 
	 * @var number format:double
	 */
	public $earnings;

	protected function getInputMap()
	{
		return [
			'StaffId' => ['staffId', 'integer', 'int64'],
			'Task' => ['task', 'string', null],
			'TimeIn' => ['timeIn', 'string', 'date-time'],
			'TimeOut' => ['timeOut', 'string', 'date-time'],
			'Hours' => ['hours', 'number', 'double'],
			'HourlyRate' => ['hourlyRate', 'number', 'double'],
			'Earnings' => ['earnings', 'number', 'double'],
			];
	}

	protected function getOutputMap()
	{
		return [
			'staffId' => ['StaffId', 'integer', 'int64'],
			'task' => ['Task', 'string', null],
			'timeIn' => ['TimeIn', 'string', 'date-time'],
			'timeOut' => ['TimeOut', 'string', 'date-time'],
			'hours' => ['Hours', 'number', 'double'],
			'hourlyRate' => ['HourlyRate', 'number', 'double'],
			'earnings' => ['Earnings', 'number', 'double'],
			];
	}
}
