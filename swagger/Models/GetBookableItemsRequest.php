<?php

namespace App\Mindbody\Models;

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
	 * @var string format:date-time
	 */
	public $startDate;
	/**
	 * The end date of the requested date range.   <br />Default:
	 * **StartDate**
	 * 
	 * @var string format:date-time
	 */
	public $endDate;
	/**
	 * If provided, filters out the appointment with this ID.
	 * 
	 * @var integer format:int64
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
	 * @var integer format:int32
	 */
	public $limit;
	/**
	 * Page offset, defaults to 0.
	 * 
	 * @var integer format:int32
	 */
	public $offset;
	/**
	 * Constructor
	 */
	public function __construct($sessionTypeIds)
	{
		$this->sessionTypeIds = $sessionTypeIds;
	}

	protected function getInputMap()
	{
		return [
			'SessionTypeIds' => ['sessionTypeIds', 'array', null],
			'LocationIds' => ['locationIds', 'array', null],
			'StaffIds' => ['staffIds', 'array', null],
			'StartDate' => ['startDate', 'string', 'date-time'],
			'EndDate' => ['endDate', 'string', 'date-time'],
			'AppointmentId' => ['appointmentId', 'integer', 'int64'],
			'IgnoreDefaultSessionLength' => ['ignoreDefaultSessionLength', 'boolean', null],
			'Limit' => ['limit', 'integer', 'int32'],
			'Offset' => ['offset', 'integer', 'int32'],
			];
	}

	protected function getOutputMap()
	{
		return [
			'sessionTypeIds' => ['SessionTypeIds', 'array', null],
			'locationIds' => ['LocationIds', 'array', null],
			'staffIds' => ['StaffIds', 'array', null],
			'startDate' => ['StartDate', 'string', 'date-time'],
			'endDate' => ['EndDate', 'string', 'date-time'],
			'appointmentId' => ['AppointmentId', 'integer', 'int64'],
			'ignoreDefaultSessionLength' => ['IgnoreDefaultSessionLength', 'boolean', null],
			'limit' => ['Limit', 'integer', 'int32'],
			'offset' => ['Offset', 'integer', 'int32'],
			];
	}
}
