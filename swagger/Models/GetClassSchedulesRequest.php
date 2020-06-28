<?php

namespace App\MindBody\Models;

/**
 * no description available
 */
class GetClassSchedulesRequest extends BaseModel
{
	/**
	 * The class schedule IDs.  <br />Default: **all**
	 * 
	 * @var integer[] 
	 */
	public $classScheduleIds;
	/**
	 * The end date of the range. Return any active enrollments that occur on
	 * or before this day.  <br />Default: **StartDate**
	 * 
	 * @var string format:date-time
	 */
	public $endDate;
	/**
	 * The location IDs.   <br />Default: **all**
	 * 
	 * @var integer[] 
	 */
	public $locationIds;
	/**
	 * The program IDs.   <br />Default: **all**
	 * 
	 * @var integer[] 
	 */
	public $programIds;
	/**
	 * The session type IDs.   <br />Default: **all**
	 * 
	 * @var integer[] 
	 */
	public $sessionTypeIds;
	/**
	 * The staff IDs.   <br />Default: **all**
	 * 
	 * @var integer[] 
	 */
	public $staffIds;
	/**
	 * The start date of the range. Return any active enrollments that occur
	 * on or after this day.  <br />Default: **today’s date**
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
