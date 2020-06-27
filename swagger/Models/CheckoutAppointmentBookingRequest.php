<?php

namespace App\MindBody\Models;

/*
 * no description available
 */
class CheckoutAppointmentBookingRequest extends BaseModel
{
	/*
	 * The ID of the staff member who is to provide the service being booked.
	 * 
	 * @var integer
	 */
	public $staffId;
	/*
	 * The ID of the location where the appointment is to take place.
	 * 
	 * @var integer
	 */
	public $locationId;
	/*
	 * The ID of the session type of this appointment.
	 * 
	 * @var integer
	 */
	public $sessionTypeId;
	/*
	 * Contains information about the resources to be used for the
	 * appointment.
	 * 
	 * @var Resource[]
	 */
	public $resources;
	/*
	 * The date and time that the appointment is to start in the business’
	 * timezone. This value must be passed in the format yyyy-mm-ddThh:mm:ss.
	 * 
	 * @var string
	 */
	public $startDateTime;
	/*
	 * The date and time that the appointment is to end in the business’
	 * timezone. This value must be passed in the format yyyy-mm-ddThh:mm:ss.
	 * 
	 * @var string
	 */
	public $endDateTime;
	/*
	 * The National Provider Identifier (NPI) of the staff member who is to
	 * provide the service. For an explanation of Provider IDs, see [Provider
	 * IDs](https://support.mindbodyonline.com/s/article/204075743-Provider-
	 * IDs?language=en_US).
	 * 
	 * @var string
	 */
	public $providerId;
}
