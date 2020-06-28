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
	 * @var string
	 */
	public $startDate;
	/**
	 * The end date of the requested date range.   <br />Default: **today’s
	 * date**
	 * 
	 * @var string
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
			'LocationIds' => 'locationIds',
			'StaffIds' => 'staffIds',
			'StartDate' => 'startDate',
			'EndDate' => 'endDate',
			'IgnorePrepFinishTimes' => 'ignorePrepFinishTimes',
			'Limit' => 'limit',
			'Offset' => 'offset',
			];
	}

	protected function getOutputMap()
	{
		return [
			'locationIds' => 'LocationIds',
			'staffIds' => 'StaffIds',
			'startDate' => 'StartDate',
			'endDate' => 'EndDate',
			'ignorePrepFinishTimes' => 'IgnorePrepFinishTimes',
			'limit' => 'Limit',
			'offset' => 'Offset',
			];
	}
}
