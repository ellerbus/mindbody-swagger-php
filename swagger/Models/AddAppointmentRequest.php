<?php

namespace App\MindBody\Models;

/*
 * no description available
 */
class AddAppointmentRequest extends BaseModel
{
	/*
	 * When `true`, indicates that a payment should be applied to the
	 * appointment.   <br />Default: **true**
	 * 
	 * @var boolean
	 */
	public $applyPayment;
	/*
	 * The RRSID of the client for whom the new appointment is being made.
	 * 
	 * @var string
	 */
	public $clientId;
	/*
	 * The duration of the appointment. This parameter is used to change the
	 * default duration of an appointment.
	 * 
	 * @var integer
	 */
	public $duration;
	/*
	 * The action taken to add this appointment.
	 * 
	 * @var string
	 */
	public $execute;
	/*
	 * The end date and time of the new appointment. <br />  Default:
	 * **StartDateTime**, offset by the staff member’s default appointment
	 * duration.
	 * 
	 * @var string
	 */
	public $endDateTime;
	/*
	 * The client’s service provider gender preference.
	 * 
	 * @var string
	 */
	public $genderPreference;
	/*
	 * The ID of the location where the new appointment is to take place.
	 * 
	 * @var integer
	 */
	public $locationId;
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
	 *  Whether to send client an email for cancellations. An email is sent
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
	 * When `true`, indicates that the staff member was requested
	 * specifically by the client.
	 * 
	 * @var boolean
	 */
	public $staffRequested;
	/*
	 * The start date and time of the new appointment.
	 * 
	 * @var string
	 */
	public $startDateTime;
	/*
	 *  When true, indicates that the method is to be validated, but no new
	 * appointment data is added.   <br />Default: **false**
	 * 
	 * @var boolean
	 */
	public $test;
	/*
	 * Constructor
	 */
	public function __construct($clientId, $locationId, $sessionTypeId, $staffId, $startDateTime)
	{
		$this->clientId = $clientId;
		$this->locationId = $locationId;
		$this->sessionTypeId = $sessionTypeId;
		$this->staffId = $staffId;
		$this->startDateTime = $startDateTime;
	}
}
