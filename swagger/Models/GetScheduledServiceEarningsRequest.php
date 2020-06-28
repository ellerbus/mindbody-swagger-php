<?php

namespace App\MindBody\Models;

/**
 * no description available
 */
class GetScheduledServiceEarningsRequest extends BaseModel
{
	/**
	 * Defines a payroll filter for the type of service offered, either
	 * "Class", "Appointment", or "Enrollment".
	 * 
	 * @var string 
	 */
	public $scheduledServiceType;
	/**
	 * The ID for the instance of the service offered
	 * 
	 * @var integer format:int64
	 */
	public $scheduledServiceId;
	/**
	 * A list of staff IDs that you want to retrieve payroll information for.
	 * If you do not supply a `StaffId`, all active staff members return,
	 * ordered by staff ID.
	 * 
	 * @var integer format:int64
	 */
	public $staffId;
	/**
	 * The beginning of the date range for the payroll information to be
	 * returned. The maximum allowed date range is 14 days.  * If you do not
	 * supply a `StartDateTime`, data returns for the seven days prior to the
	 * `EndDateTime` that you supply.  * If you do not supply either a
	 * `StartDateTime` or an `EndDateTime`, the data returns for seven days
	 * prior to today’s date.
	 * 
	 * @var string format:date-time
	 */
	public $startDateTime;
	/**
	 * The end of the date range for the payroll information to be returned.
	 * The maximum allowed date range is 14 days.<br />  Default: **Today’s
	 * date**  * If you do not supply an `EndDateTime`, the data returns for
	 * the period from the `StartDateTime` that you supply to today’s date.
	 * * If you do not supply an `EndDateTime` or a `StartDateTime`, data
	 * returns for the seven days prior to today’s date.
	 * 
	 * @var string format:date-time
	 */
	public $endDateTime;
	/**
	 * Number of results to include, defaults to 100
	 * 
	 * @var integer format:int32
	 */
	public $limit;
	/**
	 * Page offset, defaults to 0.
	 * 
	 * @var integer format:int32
	 */
	public $offset;

	protected function getInputMap()
	{
		return [
			'ScheduledServiceType' => ['scheduledServiceType', 'string', null],
			'ScheduledServiceId' => ['scheduledServiceId', 'integer', 'int64'],
			'StaffId' => ['staffId', 'integer', 'int64'],
			'StartDateTime' => ['startDateTime', 'string', 'date-time'],
			'EndDateTime' => ['endDateTime', 'string', 'date-time'],
			'Limit' => ['limit', 'integer', 'int32'],
			'Offset' => ['offset', 'integer', 'int32'],
			];
	}

	protected function getOutputMap()
	{
		return [
			'scheduledServiceType' => ['ScheduledServiceType', 'string', null],
			'scheduledServiceId' => ['ScheduledServiceId', 'integer', 'int64'],
			'staffId' => ['StaffId', 'integer', 'int64'],
			'startDateTime' => ['StartDateTime', 'string', 'date-time'],
			'endDateTime' => ['EndDateTime', 'string', 'date-time'],
			'limit' => ['Limit', 'integer', 'int32'],
			'offset' => ['Offset', 'integer', 'int32'],
			];
	}
}
