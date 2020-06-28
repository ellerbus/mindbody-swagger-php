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
			'ScheduleType' => 'scheduleType',
			'OnlineOnly' => 'onlineOnly',
			'Limit' => 'limit',
			'Offset' => 'offset',
			];
	}

	protected function getOutputMap()
	{
		return [
			'scheduleType' => 'ScheduleType',
			'onlineOnly' => 'OnlineOnly',
			'limit' => 'Limit',
			'offset' => 'Offset',
			];
	}
}
