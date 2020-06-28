<?php

namespace App\MindBody\Models;

/**
 * no description available
 */
class GetProgramsRequest extends BaseModel
{
	/**
	 * A schedule type used to filter the returned results.
	 * 
	 * @var string 
	 */
	public $scheduleType;
	/**
	 * If `true`, filters results to show only those programs that are shown
	 * online.<br />  If `false`, all programs are returned.<br />  Default:
	 * **false**
	 * 
	 * @var boolean 
	 */
	public $onlineOnly;
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
			'OnlineOnly' => ['onlineOnly', 'boolean', null],
			'Limit' => ['limit', 'integer', 'int32'],
			'Offset' => ['offset', 'integer', 'int32'],
			];
	}

	protected function getOutputMap()
	{
		return [
			'scheduleType' => ['ScheduleType', 'string', null],
			'onlineOnly' => ['OnlineOnly', 'boolean', null],
			'limit' => ['Limit', 'integer', 'int32'],
			'offset' => ['Offset', 'integer', 'int32'],
			];
	}
}
