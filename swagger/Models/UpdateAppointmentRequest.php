<?php

namespace App\Mindbody\Models;

/**
 * no description available
 */
class UpdateAppointmentRequest extends BaseModel
{
	/**
	 * The appointments unique ID.
	 * 
	 * @var integer format:int64
	 */
	public $appointmentId;
	/**
	 * The end date and time of the new appointment.   <br />Default:
	 * **StartDateTime**, offset by the staff member’s default appointment
	 * duration.
	 * 
	 * @var string format:date-time
	 */
	public $endDateTime;
	/**
	 * The action taken to add this appointment.
	 * 
	 * @var string 
	 */
	public $execute;
	/**
	 * The client’s service provider gender preference.
	 * 
	 * @var string 
	 */
	public $genderPreference;
	/**
	 * Any general notes about this appointment.
	 * 
	 * @var string 
	 */
	public $notes;
	/**
	 * If a user has Complementary and Alternative Medicine features enabled,
	 * this parameter assigns a provider ID to the appointment.
	 * 
	 * @var string 
	 */
	public $providerId;
	/**
	 * A list of resource IDs to associate with the new appointment.
	 * 
	 * @var integer[] 
	 */
	public $resourceIds;
	/**
	 * Whether to send client an email for cancellations. An email is sent
	 * only if the client has an email address and automatic emails have been
	 * set up.   <br />Default: **false**
	 * 
	 * @var boolean 
	 */
	public $sendEmail;
	/**
	 * The session type associated with the new appointment.
	 * 
	 * @var integer format:int32
	 */
	public $sessionTypeId;
	/**
	 * The ID of the staff member who is adding the new appointment.
	 * 
	 * @var integer format:int64
	 */
	public $staffId;
	/**
	 * The start date and time of the new appointment.
	 * 
	 * @var string format:date-time
	 */
	public $startDateTime;
	/**
	 * When `true`, indicates that the method is to be validated, but no new
	 * appointment data is added.   <br />Default: **false**
	 * 
	 * @var boolean 
	 */
	public $test;
	/**
	 * Constructor
	 */
	public function __construct($appointmentId)
	{
		$this->appointmentId = $appointmentId;
	}

	protected function getInputMap()
	{
		return [
			'AppointmentId' => ['appointmentId', 'integer', 'int64'],
			'EndDateTime' => ['endDateTime', 'string', 'date-time'],
			'Execute' => ['execute', 'string', null],
			'GenderPreference' => ['genderPreference', 'string', null],
			'Notes' => ['notes', 'string', null],
			'ProviderId' => ['providerId', 'string', null],
			'ResourceIds' => ['resourceIds', 'array', null],
			'SendEmail' => ['sendEmail', 'boolean', null],
			'SessionTypeId' => ['sessionTypeId', 'integer', 'int32'],
			'StaffId' => ['staffId', 'integer', 'int64'],
			'StartDateTime' => ['startDateTime', 'string', 'date-time'],
			'Test' => ['test', 'boolean', null],
			];
	}

	protected function getOutputMap()
	{
		return [
			'appointmentId' => ['AppointmentId', 'integer', 'int64'],
			'endDateTime' => ['EndDateTime', 'string', 'date-time'],
			'execute' => ['Execute', 'string', null],
			'genderPreference' => ['GenderPreference', 'string', null],
			'notes' => ['Notes', 'string', null],
			'providerId' => ['ProviderId', 'string', null],
			'resourceIds' => ['ResourceIds', 'array', null],
			'sendEmail' => ['SendEmail', 'boolean', null],
			'sessionTypeId' => ['SessionTypeId', 'integer', 'int32'],
			'staffId' => ['StaffId', 'integer', 'int64'],
			'startDateTime' => ['StartDateTime', 'string', 'date-time'],
			'test' => ['Test', 'boolean', null],
			];
	}
}
