<?php

namespace App\MindBody\Models;

/**
 * no description available
 */
class GetResourcesRequest extends BaseModel
{
	/**
	 * List of session type IDs.<br />  Default: **all**
	 * 
	 * @var integer[] 
	 */
	public $sessionTypeIds;
	/**
	 * The location of the resource. This parameter is ignored if
	 * `EndDateTime` or `LocationID` is not set.<br />  Default: **all**
	 * 
	 * @var integer format:int32
	 */
	public $locationId;
	/**
	 * The time the resource starts. This parameter is ignored if
	 * `EndDateTime` or `LocationID` is not set.
	 * 
	 * @var string format:date-time
	 */
	public $startDateTime;
	/**
	 * The time the resource ends. This parameter is ignored if `EndDateTime`
	 * or `LocationID` is not set.
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
			'SessionTypeIds' => ['sessionTypeIds', 'array', null],
			'LocationId' => ['locationId', 'integer', 'int32'],
			'StartDateTime' => ['startDateTime', 'string', 'date-time'],
			'EndDateTime' => ['endDateTime', 'string', 'date-time'],
			'Limit' => ['limit', 'integer', 'int32'],
			'Offset' => ['offset', 'integer', 'int32'],
			];
	}

	protected function getOutputMap()
	{
		return [
			'sessionTypeIds' => ['SessionTypeIds', 'array', null],
			'locationId' => ['LocationId', 'integer', 'int32'],
			'startDateTime' => ['StartDateTime', 'string', 'date-time'],
			'endDateTime' => ['EndDateTime', 'string', 'date-time'],
			'limit' => ['Limit', 'integer', 'int32'],
			'offset' => ['Offset', 'integer', 'int32'],
			];
	}
}
