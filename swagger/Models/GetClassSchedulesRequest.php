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
	 * @var string
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
	 * @var string
	 */
	public $startDate;
	/**
	 * Number of results to include, defaults to 100
	 * 
	 * @var integer
	 */
	public $limit;
	/**
	 * Page offset, defaults to 0.
	 * 
	 * @var integer
	 */
	public $offset;

	protected function getInputMap()
	{
		return [
			'ClassScheduleIds' => 'classScheduleIds',
			'EndDate' => 'endDate',
			'LocationIds' => 'locationIds',
			'ProgramIds' => 'programIds',
			'SessionTypeIds' => 'sessionTypeIds',
			'StaffIds' => 'staffIds',
			'StartDate' => 'startDate',
			'Limit' => 'limit',
			'Offset' => 'offset',
			];
	}

	protected function getOutputMap()
	{
		return [
			'classScheduleIds' => 'ClassScheduleIds',
			'endDate' => 'EndDate',
			'locationIds' => 'LocationIds',
			'programIds' => 'ProgramIds',
			'sessionTypeIds' => 'SessionTypeIds',
			'staffIds' => 'StaffIds',
			'startDate' => 'StartDate',
			'limit' => 'Limit',
			'offset' => 'Offset',
			];
	}
}
