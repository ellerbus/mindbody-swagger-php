<?php

namespace App\MindBody\Models;

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
			'AppointmentIds' => 'appointmentIds',
			'LocationIds' => 'locationIds',
			'StartDate' => 'startDate',
			'EndDate' => 'endDate',
			'StaffIds' => 'staffIds',
			'ClientId' => 'clientId',
			'Limit' => 'limit',
			'Offset' => 'offset',
			];
	}

	protected function getOutputMap()
	{
		return [
			'appointmentIds' => 'AppointmentIds',
			'locationIds' => 'LocationIds',
			'startDate' => 'StartDate',
			'endDate' => 'EndDate',
			'staffIds' => 'StaffIds',
			'clientId' => 'ClientId',
			'limit' => 'Limit',
			'offset' => 'Offset',
			];
	}
}
