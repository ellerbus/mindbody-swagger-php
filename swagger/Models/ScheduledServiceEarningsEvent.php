<?php

namespace App\Mindbody\Models;

/**
 * no description available
 */
class ScheduledServiceEarningsEvent extends BaseModel
{
	/**
	 * The ID of the staff member who taught the class.
	 * 
	 * @var integer format:int64
	 */
	public $staffId;
	/**
	 * The class' ID.
	 * 
	 * @var integer format:int64
	 */
	public $scheduledServiceId;
	/**
	 * The type of the scheduled service; i.e, a class, appointment, or
	 * enrollment.
	 * 
	 * @var string 
	 */
	public $scheduledServiceType;
	/**
	 * The total monetary amount the staff is to be paid for this class.
	 * 
	 * @var number format:double
	 */
	public $earnings;
	/**
	 * no description available
	 * 
	 * @var string format:date-time
	 */
	public $dateTime;

	protected function getInputMap()
	{
		return [
			'StaffId' => ['staffId', 'integer', 'int64'],
			'ScheduledServiceId' => ['scheduledServiceId', 'integer', 'int64'],
			'ScheduledServiceType' => ['scheduledServiceType', 'string', null],
			'Earnings' => ['earnings', 'number', 'double'],
			'DateTime' => ['dateTime', 'string', 'date-time'],
			];
	}

	protected function getOutputMap()
	{
		return [
			'staffId' => ['StaffId', 'integer', 'int64'],
			'scheduledServiceId' => ['ScheduledServiceId', 'integer', 'int64'],
			'scheduledServiceType' => ['ScheduledServiceType', 'string', null],
			'earnings' => ['Earnings', 'number', 'double'],
			'dateTime' => ['DateTime', 'string', 'date-time'],
			];
	}
}
