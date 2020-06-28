<?php

namespace App\MindBody\Models;

/**
 * Contains information about an appointment.
 */
class Appointment extends BaseModel
{
	/**
	 * The preferred gender of the appointment provider.
	 * 
	 * @var string 
	 */
	public $genderPreference;
	/**
	 * The duration of the appointment.
	 * 
	 * @var integer format:int32
	 */
	public $duration;
	/**
	 * If a user has Complementary and Alternative Medicine features enabled,
	 * this property indicates the provider assigned to the appointment.
	 * 
	 * @var string 
	 */
	public $providerId;
	/**
	 * The unique ID of the appointment.
	 * 
	 * @var integer format:int64
	 */
	public $id;
	/**
	 * The status of this appointment.
	 * 
	 * @var string 
	 */
	public $status;
	/**
	 * The date and time the appointment is to start.
	 * 
	 * @var string format:date-time
	 */
	public $startDateTime;
	/**
	 * The date and time the appointment is to end.
	 * 
	 * @var string format:date-time
	 */
	public $endDateTime;
	/**
	 * Any notes associated with the appointment.
	 * 
	 * @var string 
	 */
	public $notes;
	/**
	 * When `true`, indicates that the staff member was requested
	 * specifically by the client.
	 * 
	 * @var boolean 
	 */
	public $staffRequested;
	/**
	 * The ID of the program to which this appointment belongs.
	 * 
	 * @var integer format:int32
	 */
	public $programId;
	/**
	 * The ID of the session type of this appointment.
	 * 
	 * @var integer format:int32
	 */
	public $sessionTypeId;
	/**
	 * The ID of the location where this appointment is to take place.
	 * 
	 * @var integer format:int32
	 */
	public $locationId;
	/**
	 * The ID of the staff member providing the service for this appointment.
	 * 
	 * @var integer format:int64
	 */
	public $staffId;
	/**
	 * The RSSID of the client who is booked for this appointment.
	 * 
	 * @var string 
	 */
	public $clientId;
	/**
	 * When `true`, indicates that this is the client’s first appointment
	 * at this site.
	 * 
	 * @var boolean 
	 */
	public $firstAppointment;
	/**
	 * The ID of the pass on the client’s account that is to pay for this
	 * appointment.
	 * 
	 * @var integer format:int64
	 */
	public $clientServiceId;
	/**
	 * The resources this appointment is to use.
	 * 
	 * @var Resource[] 
	 */
	public $resources;

	protected function getInputMap()
	{
		return [
			'GenderPreference' => ['genderPreference', 'string', null],
			'Duration' => ['duration', 'integer', 'int32'],
			'ProviderId' => ['providerId', 'string', null],
			'Id' => ['id', 'integer', 'int64'],
			'Status' => ['status', 'string', null],
			'StartDateTime' => ['startDateTime', 'string', 'date-time'],
			'EndDateTime' => ['endDateTime', 'string', 'date-time'],
			'Notes' => ['notes', 'string', null],
			'StaffRequested' => ['staffRequested', 'boolean', null],
			'ProgramId' => ['programId', 'integer', 'int32'],
			'SessionTypeId' => ['sessionTypeId', 'integer', 'int32'],
			'LocationId' => ['locationId', 'integer', 'int32'],
			'StaffId' => ['staffId', 'integer', 'int64'],
			'ClientId' => ['clientId', 'string', null],
			'FirstAppointment' => ['firstAppointment', 'boolean', null],
			'ClientServiceId' => ['clientServiceId', 'integer', 'int64'],
			'Resources' => ['resources', 'array', Resource::class],
			];
	}

	protected function getOutputMap()
	{
		return [
			'genderPreference' => ['GenderPreference', 'string', null],
			'duration' => ['Duration', 'integer', 'int32'],
			'providerId' => ['ProviderId', 'string', null],
			'id' => ['Id', 'integer', 'int64'],
			'status' => ['Status', 'string', null],
			'startDateTime' => ['StartDateTime', 'string', 'date-time'],
			'endDateTime' => ['EndDateTime', 'string', 'date-time'],
			'notes' => ['Notes', 'string', null],
			'staffRequested' => ['StaffRequested', 'boolean', null],
			'programId' => ['ProgramId', 'integer', 'int32'],
			'sessionTypeId' => ['SessionTypeId', 'integer', 'int32'],
			'locationId' => ['LocationId', 'integer', 'int32'],
			'staffId' => ['StaffId', 'integer', 'int64'],
			'clientId' => ['ClientId', 'string', null],
			'firstAppointment' => ['FirstAppointment', 'boolean', null],
			'clientServiceId' => ['ClientServiceId', 'integer', 'int64'],
			'resources' => ['Resources', 'array', Resource::class],
			];
	}
}
