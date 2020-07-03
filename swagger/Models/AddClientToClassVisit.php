<?php

namespace App\Mindbody\Models;

/**
 * no description available
 */
class AddClientToClassVisit extends BaseModel
{
	/**
	 * The appointment’s ID.
	 * 
	 * @var integer format:int32
	 */
	public $appointmentId;
	/**
	 * The gender of staff member with whom the client prefers to book
	 * appointments.
	 * 
	 * @var string 
	 */
	public $appointmentGenderPreference;
	/**
	 * The status of the appointment.
	 * 
	 * @var string 
	 */
	public $appointmentStatus;
	/**
	 * The class ID that was used to retrieve the visits.
	 * 
	 * @var integer format:int32
	 */
	public $classId;
	/**
	 * The ID of the client associated with the visit.
	 * 
	 * @var string 
	 */
	public $clientId;
	/**
	 * The time this class is scheduled to start.
	 * 
	 * @var string format:date-time
	 */
	public $startDateTime;
	/**
	 * The date and time the visit ends. The Public API returns UTC dates and
	 * times. For example, a class that occurs on June 25th, 2018 at 2:15PM
	 * (EST) appears as 2018-06-25T19:15:00Z because EST is five hours behind
	 * UTC. Date time pairs always return in the format YYYY-MM-DDTHH:mm:ssZ.
	 * 
	 * @var string format:date-time
	 */
	public $endDateTime;
	/**
	 * The ID of the visit.
	 * 
	 * @var integer format:int64
	 */
	public $id;
	/**
	 * When included in the request, only records modified on or after the
	 * specified `LastModifiedDate` are included in the response. The Public
	 * API returns UTC dates and times. For example, a class that occurs on
	 * June 25th, 2018 at 2:15PM (EST) appears as 2018-06-25T19:15:00Z
	 * because EST is five hours behind UTC. Date time pairs always return in
	 * the format YYYY-MM-DDTHH:mm:ssZ.
	 * 
	 * @var string format:date-time
	 */
	public $lastModifiedDateTime;
	/**
	 * When `true`, indicates that the class has been `LateCancelled`.<br />
	 * When `false`, indicates that the class has not been `LateCancelled`.
	 * 
	 * @var boolean 
	 */
	public $lateCancelled;
	/**
	 * The ID of the location where the visit took place or is to take place.
	 * 
	 * @var integer format:int32
	 */
	public $locationId;
	/**
	 * When `true`, the client can make up this session and a session is not
	 * deducted from the pricing option that was used to sign the client into
	 * the enrollment. When the client has the make-up session, a session is
	 * automatically removed from a pricing option that matches the service
	 * category of the enrollment and is within the same date range of the
	 * missed session.<br />  When `false`, the client cannot make up this
	 * session. See [Enrollments: Make-ups](https://support.mindbodyonline.co
	 * m/s/article/203259433-Enrollments-Make-ups?language=en_US) for more
	 * information.
	 * 
	 * @var boolean 
	 */
	public $makeUp;
	/**
	 * The name of the class.
	 * 
	 * @var string 
	 */
	public $name;
	/**
	 * The ID of the client's pricing option applied to the class visit.
	 * 
	 * @var integer format:int64
	 */
	public $serviceId;
	/**
	 * The name of the pricing option applied to the class visit.
	 * 
	 * @var string 
	 */
	public $serviceName;
	/**
	 * The business' ID of the type of pricing option used to pay for the
	 * class visit.
	 * 
	 * @var integer format:int64
	 */
	public $productId;
	/**
	 * When `true`, indicates that the client has been signed in.<br />  When
	 * `false`, indicates that the client has not been signed in.
	 * 
	 * @var boolean 
	 */
	public $signedIn;
	/**
	 * The ID of the staff member who is teaching the class.
	 * 
	 * @var integer format:int64
	 */
	public $staffId;
	/**
	 * When `true`, indicates that the client signed up online.<br />  When
	 * `false`, indicates that the client was signed up by a staff member.
	 * 
	 * @var boolean 
	 */
	public $webSignup;
	/**
	 * The action taken.
	 * 
	 * @var string 
	 */
	public $action;
	/**
	 * When `true`, indicates that the client is paying for the visit using a
	 * pricing option from one of their associated cross-regional profiles.
	 * 
	 * @var boolean 
	 */
	public $crossRegionalBookingPerformed;
	/**
	 * The ID of the business from which cross-regional payment is applied.
	 * 
	 * @var integer format:int32
	 */
	public $siteId;
	/**
	 * When this value is not null, it indicates that the client is on the
	 * waiting list for the requested class. The only additional fields that
	 * are populated when this is not null are:  * ClassId  * ClientId    You
	 * can call GET WaitlistEntries using `WaitlistEntryId` to obtain more
	 * data about this waiting list entry.
	 * 
	 * @var integer format:int32
	 */
	public $waitlistEntryId;

	protected function getInputMap()
	{
		return [
			'AppointmentId' => ['appointmentId', 'integer', 'int32'],
			'AppointmentGenderPreference' => ['appointmentGenderPreference', 'string', null],
			'AppointmentStatus' => ['appointmentStatus', 'string', null],
			'ClassId' => ['classId', 'integer', 'int32'],
			'ClientId' => ['clientId', 'string', null],
			'StartDateTime' => ['startDateTime', 'string', 'date-time'],
			'EndDateTime' => ['endDateTime', 'string', 'date-time'],
			'Id' => ['id', 'integer', 'int64'],
			'LastModifiedDateTime' => ['lastModifiedDateTime', 'string', 'date-time'],
			'LateCancelled' => ['lateCancelled', 'boolean', null],
			'LocationId' => ['locationId', 'integer', 'int32'],
			'MakeUp' => ['makeUp', 'boolean', null],
			'Name' => ['name', 'string', null],
			'ServiceId' => ['serviceId', 'integer', 'int64'],
			'ServiceName' => ['serviceName', 'string', null],
			'ProductId' => ['productId', 'integer', 'int64'],
			'SignedIn' => ['signedIn', 'boolean', null],
			'StaffId' => ['staffId', 'integer', 'int64'],
			'WebSignup' => ['webSignup', 'boolean', null],
			'Action' => ['action', 'string', null],
			'CrossRegionalBookingPerformed' => ['crossRegionalBookingPerformed', 'boolean', null],
			'SiteId' => ['siteId', 'integer', 'int32'],
			'WaitlistEntryId' => ['waitlistEntryId', 'integer', 'int32'],
			];
	}

	protected function getOutputMap()
	{
		return [
			'appointmentId' => ['AppointmentId', 'integer', 'int32'],
			'appointmentGenderPreference' => ['AppointmentGenderPreference', 'string', null],
			'appointmentStatus' => ['AppointmentStatus', 'string', null],
			'classId' => ['ClassId', 'integer', 'int32'],
			'clientId' => ['ClientId', 'string', null],
			'startDateTime' => ['StartDateTime', 'string', 'date-time'],
			'endDateTime' => ['EndDateTime', 'string', 'date-time'],
			'id' => ['Id', 'integer', 'int64'],
			'lastModifiedDateTime' => ['LastModifiedDateTime', 'string', 'date-time'],
			'lateCancelled' => ['LateCancelled', 'boolean', null],
			'locationId' => ['LocationId', 'integer', 'int32'],
			'makeUp' => ['MakeUp', 'boolean', null],
			'name' => ['Name', 'string', null],
			'serviceId' => ['ServiceId', 'integer', 'int64'],
			'serviceName' => ['ServiceName', 'string', null],
			'productId' => ['ProductId', 'integer', 'int64'],
			'signedIn' => ['SignedIn', 'boolean', null],
			'staffId' => ['StaffId', 'integer', 'int64'],
			'webSignup' => ['WebSignup', 'boolean', null],
			'action' => ['Action', 'string', null],
			'crossRegionalBookingPerformed' => ['CrossRegionalBookingPerformed', 'boolean', null],
			'siteId' => ['SiteId', 'integer', 'int32'],
			'waitlistEntryId' => ['WaitlistEntryId', 'integer', 'int32'],
			];
	}
}
