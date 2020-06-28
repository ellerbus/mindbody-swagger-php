<?php

namespace App\MindBody\Models;

/**
 * no description available
 */
class GetScheduleItemsRequest extends BaseModel
{
	/**
	 * A list of requested location IDs.
	 * 
	 * @var integer[] 
	 */
	public $locationIds;
	/**
	 * A list of requested staff IDs.
	 * 
	 * @var integer[] 
	 */
	public $staffIds;
	/**
	 * The start date of the requested date range.   <br />Default:
	 * **today’s date**
	 * 
	 * @var string format:date-time
	 */
	public $startDate;
	/**
	 * The end date of the requested date range.   <br />Default: **today’s
	 * date**
	 * 
	 * @var string format:date-time
	 */
	public $endDate;
	/**
	 * When `true`, appointment preparation and finish unavailabilities are
	 * not returned.   <br />Default: **false**
	 * 
	 * @var boolean 
	 */
	public $ignorePrepFinishTimes;
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
			'LocationIds' => ['locationIds', 'array', null],
			'StaffIds' => ['staffIds', 'array', null],
			'StartDate' => ['startDate', 'string', 'date-time'],
			'EndDate' => ['endDate', 'string', 'date-time'],
			'IgnorePrepFinishTimes' => ['ignorePrepFinishTimes', 'boolean', null],
			'Limit' => ['limit', 'integer', 'int32'],
			'Offset' => ['offset', 'integer', 'int32'],
			];
	}

	protected function getOutputMap()
	{
		return [
			'locationIds' => ['LocationIds', 'array', null],
			'staffIds' => ['StaffIds', 'array', null],
			'startDate' => ['StartDate', 'string', 'date-time'],
			'endDate' => ['EndDate', 'string', 'date-time'],
			'ignorePrepFinishTimes' => ['IgnorePrepFinishTimes', 'boolean', null],
			'limit' => ['Limit', 'integer', 'int32'],
			'offset' => ['Offset', 'integer', 'int32'],
			];
	}
}
