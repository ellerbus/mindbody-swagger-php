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
	 * @var integer
	 */
	public $locationId;
	/**
	 * The time the resource starts. This parameter is ignored if
	 * `EndDateTime` or `LocationID` is not set.
	 * 
	 * @var string
	 */
	public $startDateTime;
	/**
	 * The time the resource ends. This parameter is ignored if `EndDateTime`
	 * or `LocationID` is not set.
	 * 
	 * @var string
	 */
	public $endDateTime;
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
}
