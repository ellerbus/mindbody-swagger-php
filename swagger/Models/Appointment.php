<?php

namespace App\MindBody\Models;

/*
 * Contains information about an appointment.
 */
class Appointment extends BaseModel
{
	/*
	 * The preferred gender of the appointment provider.
	 * 
	 * @var string
	 */
	public $genderPreference;
	/*
	 * The duration of the appointment.
	 * 
	 * @var integer
	 */
	public $duration;
	/*
	 * If a user has Complementary and Alternative Medicine features enabled,
	 * this property indicates the provider assigned to the appointment.
	 * 
	 * @var string
	 */
	public $providerId;
	/*
	 * The unique ID of the appointment.
	 * 
	 * @var integer
	 */
	public $id;
	/*
	 * The status of this appointment.
	 * 
	 * @var string
	 */
	public $status;
	/*
	 * The date and time the appointment is to start.
	 * 
	 * @var string
	 */
	public $startDateTime;
	/*
	 * The date and time the appointment is to end.
	 * 
	 * @var string
	 */
	public $endDateTime;
	/*
	 * Any notes associated with the appointment.
	 * 
	 * @var string
	 */
	public $notes;
	/*
	 * When `true`, indicates that the staff member was requested
	 * specifically by the client.
	 * 
	 * @var boolean
	 */
	public $staffRequested;
	/*
	 * The ID of the program to which this appointment belongs.
	 * 
	 * @var integer
	 */
	public $programId;
	/*
	 * The ID of the session type of this appointment.
	 * 
	 * @var integer
	 */
	public $sessionTypeId;
	/*
	 * The ID of the location where this appointment is to take place.
	 * 
	 * @var integer
	 */
	public $locationId;
	/*
	 * The ID of the staff member providing the service for this appointment.
	 * 
	 * @var integer
	 */
	public $staffId;
	/*
	 * The RSSID of the client who is booked for this appointment.
	 * 
	 * @var string
	 */
	public $clientId;
	/*
	 * When `true`, indicates that this is the client’s first appointment
	 * at this site.
	 * 
	 * @var boolean
	 */
	public $firstAppointment;
	/*
	 * The ID of the pass on the client’s account that is to pay for this
	 * appointment.
	 * 
	 * @var integer
	 */
	public $clientServiceId;
	/*
	 * The resources this appointment is to use.
	 * 
	 * @var Resource[]
	 */
	public $resources;
}
