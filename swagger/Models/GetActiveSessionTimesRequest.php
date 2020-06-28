<?php

namespace App\MindBody\Models;

/**
 * no description available
 */
class GetActiveSessionTimesRequest extends BaseModel
{
	/**
	 * Filters on the provided the schedule type. Either `SessionTypeIds` or
	 * `ScheduleType` must be provided.
	 * 
	 * @var string 
	 */
	public $scheduleType;
	/**
	 * Filters on the provided session type IDs. Either `SessionTypeIds` or
	 * `ScheduleType` must be provided.
	 * 
	 * @var integer[] 
	 */
	public $sessionTypeIds;
	/**
	 * Filters results to times that start on or after this time on the
	 * current date. Any date provided is ignored.  <br />Default:
	 * **00:00:00**
	 * 
	 * @var string format:date-time
	 */
	public $startTime;
	/**
	 * Filters results to times that end on or before this time on the
	 * current date. Any date provided is ignored..  <br />Default:
	 * **23:59:59**
	 * 
	 * @var string format:date-time
	 */
	public $endTime;
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
			'ScheduleType' => ['scheduleType', 'string', null],
			'SessionTypeIds' => ['sessionTypeIds', 'array', null],
			'StartTime' => ['startTime', 'string', 'date-time'],
			'EndTime' => ['endTime', 'string', 'date-time'],
			'Limit' => ['limit', 'integer', 'int32'],
			'Offset' => ['offset', 'integer', 'int32'],
			];
	}

	protected function getOutputMap()
	{
		return [
			'scheduleType' => ['ScheduleType', 'string', null],
			'sessionTypeIds' => ['SessionTypeIds', 'array', null],
			'startTime' => ['StartTime', 'string', 'date-time'],
			'endTime' => ['EndTime', 'string', 'date-time'],
			'limit' => ['Limit', 'integer', 'int32'],
			'offset' => ['Offset', 'integer', 'int32'],
			];
	}
}
