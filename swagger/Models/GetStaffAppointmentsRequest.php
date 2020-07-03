<?php

namespace App\Mindbody\Models;

/**
 * no description available
 */
class GetStaffAppointmentsRequest extends BaseModel
{
	/**
	 * A list of the requested appointment IDs.
	 * 
	 * @var integer[] 
	 */
	public $appointmentIds;
	/**
	 * A list of the requested location IDs.
	 * 
	 * @var integer[] 
	 */
	public $locationIds;
	/**
	 * The start date of the requested date range. If omitted, the default is
	 * used.   <br />Default: **today’s date**
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
	 * List of staff IDs to be returned. Use a value of zero to return all
	 * staff appointments.
	 * 
	 * @var integer[] 
	 */
	public $staffIds;
	/**
	 * The client ID to be returned.
	 * 
	 * @var string 
	 */
	public $clientId;
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
			'AppointmentIds' => ['appointmentIds', 'array', null],
			'LocationIds' => ['locationIds', 'array', null],
			'StartDate' => ['startDate', 'string', 'date-time'],
			'EndDate' => ['endDate', 'string', 'date-time'],
			'StaffIds' => ['staffIds', 'array', null],
			'ClientId' => ['clientId', 'string', null],
			'Limit' => ['limit', 'integer', 'int32'],
			'Offset' => ['offset', 'integer', 'int32'],
			];
	}

	protected function getOutputMap()
	{
		return [
			'appointmentIds' => ['AppointmentIds', 'array', null],
			'locationIds' => ['LocationIds', 'array', null],
			'startDate' => ['StartDate', 'string', 'date-time'],
			'endDate' => ['EndDate', 'string', 'date-time'],
			'staffIds' => ['StaffIds', 'array', null],
			'clientId' => ['ClientId', 'string', null],
			'limit' => ['Limit', 'integer', 'int32'],
			'offset' => ['Offset', 'integer', 'int32'],
			];
	}
}
