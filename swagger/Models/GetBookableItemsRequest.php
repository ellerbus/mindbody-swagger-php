<?php

namespace App\MindBody\Models;

/**
 * no description available
 */
class GetBookableItemsRequest extends BaseModel
{
	/**
	 * A list of the requested session type IDs.
	 * 
	 * @var integer[]
	 */
	public $sessionTypeIds;
	/**
	 * A list of the requested location IDs.
	 * 
	 * @var integer[]
	 */
	public $locationIds;
	/**
	 * A list of the requested staff IDs.
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
	 * The end date of the requested date range.   <br />Default:
	 * **StartDate**
	 * 
	 * @var string
	 */
	public $endDate;
	/**
	 * If provided, filters out the appointment with this ID.
	 * 
	 * @var integer
	 */
	public $appointmentId;
	/**
	 * When `true`, availabilities that are non-default return, for example,
	 * a 30-minute availability with a 60-minute default session length.<br
	 * />  When `false`, only availabilities that have the default session
	 * length return.
	 * 
	 * @var boolean
	 */
	public $ignoreDefaultSessionLength;
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
	/**
	 * Constructor
	 */
	public function __construct($sessionTypeIds)
	{
		$this->sessionTypeIds = $sessionTypeIds;
	}
}
