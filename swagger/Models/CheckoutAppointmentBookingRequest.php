<?php

namespace App\Mindbody\Models;

/**
 * no description available
 */
class CheckoutAppointmentBookingRequest extends BaseModel
{
	/**
	 * The ID of the staff member who is to provide the service being booked.
	 * 
	 * @var integer format:int64
	 */
	public $staffId;
	/**
	 * The ID of the location where the appointment is to take place.
	 * 
	 * @var integer format:int32
	 */
	public $locationId;
	/**
	 * The ID of the session type of this appointment.
	 * 
	 * @var integer format:int32
	 */
	public $sessionTypeId;
	/**
	 * Contains information about the resources to be used for the
	 * appointment.
	 * 
	 * @var Resource[] 
	 */
	public $resources;
	/**
	 * The date and time that the appointment is to start in the business’
	 * timezone. This value must be passed in the format yyyy-mm-ddThh:mm:ss.
	 * 
	 * @var string format:date-time
	 */
	public $startDateTime;
	/**
	 * The date and time that the appointment is to end in the business’
	 * timezone. This value must be passed in the format yyyy-mm-ddThh:mm:ss.
	 * 
	 * @var string format:date-time
	 */
	public $endDateTime;
	/**
	 * The National Provider Identifier (NPI) of the staff member who is to
	 * provide the service. For an explanation of Provider IDs, see [Provider
	 * IDs](https://support.mindbodyonline.com/s/article/204075743-Provider-
	 * IDs?language=en_US).
	 * 
	 * @var string 
	 */
	public $providerId;

	protected function getInputMap()
	{
		return [
			'StaffId' => ['staffId', 'integer', 'int64'],
			'LocationId' => ['locationId', 'integer', 'int32'],
			'SessionTypeId' => ['sessionTypeId', 'integer', 'int32'],
			'Resources' => ['resources', 'array', Resource::class],
			'StartDateTime' => ['startDateTime', 'string', 'date-time'],
			'EndDateTime' => ['endDateTime', 'string', 'date-time'],
			'ProviderId' => ['providerId', 'string', null],
			];
	}

	protected function getOutputMap()
	{
		return [
			'staffId' => ['StaffId', 'integer', 'int64'],
			'locationId' => ['LocationId', 'integer', 'int32'],
			'sessionTypeId' => ['SessionTypeId', 'integer', 'int32'],
			'resources' => ['Resources', 'array', Resource::class],
			'startDateTime' => ['StartDateTime', 'string', 'date-time'],
			'endDateTime' => ['EndDateTime', 'string', 'date-time'],
			'providerId' => ['ProviderId', 'string', null],
			];
	}
}
