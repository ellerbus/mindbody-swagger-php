<?php

namespace App\Mindbody\Models;

/**
 * no description available
 */
class GetEnrollmentsRequest extends BaseModel
{
	/**
	 * A list of the requested class schedule IDs. If omitted, all class
	 * schedule IDs return.
	 * 
	 * @var integer[] 
	 */
	public $classScheduleIds;
	/**
	 * The end of the date range. The response returns any active enrollments
	 * that occur on or before this day.<br />  Default: **StartDate**
	 * 
	 * @var string format:date-time
	 */
	public $endDate;
	/**
	 * List of the IDs for the requested locations. If omitted, all location
	 * IDs return.
	 * 
	 * @var integer[] 
	 */
	public $locationIds;
	/**
	 * List of the IDs for the requested programs. If omitted, all program
	 * IDs return.
	 * 
	 * @var integer[] 
	 */
	public $programIds;
	/**
	 * List of the IDs for the requested session types. If omitted, all
	 * session types IDs return.
	 * 
	 * @var integer[] 
	 */
	public $sessionTypeIds;
	/**
	 * List of the IDs for the requested staff IDs. If omitted, all staff IDs
	 * return.
	 * 
	 * @var integer[] 
	 */
	public $staffIds;
	/**
	 * The start of the date range. The response returns any active
	 * enrollments that occur on or after this day.<br />  Default:
	 * **today’s date**
	 * 
	 * @var string format:date-time
	 */
	public $startDate;
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
			'ClassScheduleIds' => ['classScheduleIds', 'array', null],
			'EndDate' => ['endDate', 'string', 'date-time'],
			'LocationIds' => ['locationIds', 'array', null],
			'ProgramIds' => ['programIds', 'array', null],
			'SessionTypeIds' => ['sessionTypeIds', 'array', null],
			'StaffIds' => ['staffIds', 'array', null],
			'StartDate' => ['startDate', 'string', 'date-time'],
			'Limit' => ['limit', 'integer', 'int32'],
			'Offset' => ['offset', 'integer', 'int32'],
			];
	}

	protected function getOutputMap()
	{
		return [
			'classScheduleIds' => ['ClassScheduleIds', 'array', null],
			'endDate' => ['EndDate', 'string', 'date-time'],
			'locationIds' => ['LocationIds', 'array', null],
			'programIds' => ['ProgramIds', 'array', null],
			'sessionTypeIds' => ['SessionTypeIds', 'array', null],
			'staffIds' => ['StaffIds', 'array', null],
			'startDate' => ['StartDate', 'string', 'date-time'],
			'limit' => ['Limit', 'integer', 'int32'],
			'offset' => ['Offset', 'integer', 'int32'],
			];
	}
}
