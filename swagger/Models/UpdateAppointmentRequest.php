<?php

namespace App\MindBody\Models;

/*
 * no description available
 */
class UpdateAppointmentRequest extends BaseModel
{
	/*
	 * The appointments unique ID.
	 * 
	 * @var integer
	 */
	public $appointmentId;
	/*
	 * The end date and time of the new appointment.   <br />Default:
	 * **StartDateTime**, offset by the staff member’s default appointment
	 * duration.
	 * 
	 * @var string
	 */
	public $endDateTime;
	/*
	 * The action taken to add this appointment.
	 * 
	 * @var string
	 */
	public $execute;
	/*
	 * The client’s service provider gender preference.
	 * 
	 * @var string
	 */
	public $genderPreference;
	/*
	 * Any general notes about this appointment.
	 * 
	 * @var string
	 */
	public $notes;
	/*
	 * If a user has Complementary and Alternative Medicine features enabled,
	 * this parameter assigns a provider ID to the appointment.
	 * 
	 * @var string
	 */
	public $providerId;
	/*
	 * A list of resource IDs to associate with the new appointment.
	 * 
	 * @var integer[]
	 */
	public $resourceIds;
	/*
	 * Whether to send client an email for cancellations. An email is sent
	 * only if the client has an email address and automatic emails have been
	 * set up.   <br />Default: **false**
	 * 
	 * @var boolean
	 */
	public $sendEmail;
	/*
	 * The session type associated with the new appointment.
	 * 
	 * @var integer
	 */
	public $sessionTypeId;
	/*
	 * The ID of the staff member who is adding the new appointment.
	 * 
	 * @var integer
	 */
	public $staffId;
	/*
	 * The start date and time of the new appointment.
	 * 
	 * @var string
	 */
	public $startDateTime;
	/*
	 * When `true`, indicates that the method is to be validated, but no new
	 * appointment data is added.   <br />Default: **false**
	 * 
	 * @var boolean
	 */
	public $test;
	/*
	 *
	 */
	public function __construct($appointmentId)
	{
		$this->appointmentId = $appointmentId;
	}
}
