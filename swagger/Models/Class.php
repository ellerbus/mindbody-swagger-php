<?php

namespace App\Mindbody\Models;

/**
 * Represents a single class instance. The class meets at the start time,
 * goes until the end time.
 */
class Class extends BaseModel
{
	/**
	 * The ID used to retrieve the class schedule for the desired class.
	 * 
	 * @var integer format:int32
	 */
	public $classScheduleId;
	/**
	 * Contains information about visits.
	 * 
	 * @var Visit[] 
	 */
	public $visits;
	/**
	 * Contains information about clients.
	 * 
	 * @var Client[] 
	 */
	public $clients;
	/**
	 * Contains information about a location.
	 * 
	 * @var Location 
	 */
	public $location;
	/**
	 * Contains information about a resource, such as a room, assigned to a
	 * class.
	 * 
	 * @var Resource 
	 */
	public $resource;
	/**
	 * The maximum number of clients allowed in the class.
	 * 
	 * @var integer format:int32
	 */
	public $maxCapacity;
	/**
	 * The maximum number of clients allowed to sign up online for the class.
	 * 
	 * @var integer format:int32
	 */
	public $webCapacity;
	/**
	 * The total number of clients booked in the class.
	 * 
	 * @var integer format:int32
	 */
	public $totalBooked;
	/**
	 * The total number of booked clients on the waiting list for the class.
	 * 
	 * @var integer format:int32
	 */
	public $totalBookedWaitlist;
	/**
	 * The total number of clients who signed up online for the class.
	 * 
	 * @var integer format:int32
	 */
	public $webBooked;
	/**
	 * The ID of the semester that the class is a part of, if any.
	 * 
	 * @var integer format:int32
	 */
	public $semesterId;
	/**
	 * When `true`, indicates that the class has been cancelled.<br />  When
	 * `false`, indicates that the class has not been cancelled.
	 * 
	 * @var boolean 
	 */
	public $isCanceled;
	/**
	 * When `true`, indicates that the class is being taught by a substitute
	 * teacher.<br />  When `false`, indicates that the class is being taught
	 * by its regular teacher.
	 * 
	 * @var boolean 
	 */
	public $substitute;
	/**
	 * When `true`, indicates that the class is shown to clients when in
	 * consumer mode.<br />  When `false`, indicates that the class is not
	 * shown to clients when in consumer mode.
	 * 
	 * @var boolean 
	 */
	public $active;
	/**
	 * When `true`, indicates that the clients can be placed on a waiting
	 * list for the class.<br />  When `false`, indicates that the clients
	 * cannot be placed on a waiting list for the class.
	 * 
	 * @var boolean 
	 */
	public $isWaitlistAvailable;
	/**
	 * When `true`, indicates that the client with the given `ClientId` is
	 * enrolled in this class.<br />  When `false`, indicates that the client
	 * with the given `ClientId` is not enrolled in this class.
	 * 
	 * @var boolean 
	 */
	public $isEnrolled;
	/**
	 * When `true`, indicates that this class is hidden when cancelled.<br />
	 * When `false`, indicates that this class is not hidden when cancelled.
	 * 
	 * @var boolean 
	 */
	public $hideCancel;
	/**
	 * The unique identifier for the class.
	 * 
	 * @var integer format:int32
	 */
	public $id;
	/**
	 * When `true`, indicates that the client with the given client ID can
	 * book this class.<br />  When `false`, indicates that the client with
	 * the given client ID cannot book this class.
	 * 
	 * @var boolean 
	 */
	public $isAvailable;
	/**
	 * The time this class is scheduled to start.
	 * 
	 * @var string format:date-time
	 */
	public $startDateTime;
	/**
	 * The time this class is scheduled to end.
	 * 
	 * @var string format:date-time
	 */
	public $endDateTime;
	/**
	 * The last time this class was modified.
	 * 
	 * @var string format:date-time
	 */
	public $lastModifiedDateTime;
	/**
	 * Contains information that defines the class.
	 * 
	 * @var ClassDescription 
	 */
	public $classDescription;
	/**
	 * Contains information about the staff member.
	 * 
	 * @var Staff 
	 */
	public $staff;
	/**
	 * Contains information about the window for booking.
	 * 
	 * @var BookingWindow 
	 */
	public $bookingWindow;
	/**
	 * Contains the booking’s payment status.
	 * 
	 * @var string 
	 */
	public $bookingStatus;

	protected function getInputMap()
	{
		return [
			'ClassScheduleId' => ['classScheduleId', 'integer', 'int32'],
			'Visits' => ['visits', 'array', Visit::class],
			'Clients' => ['clients', 'array', Client::class],
			'Location' => ['location', Location::class, null],
			'Resource' => ['resource', Resource::class, null],
			'MaxCapacity' => ['maxCapacity', 'integer', 'int32'],
			'WebCapacity' => ['webCapacity', 'integer', 'int32'],
			'TotalBooked' => ['totalBooked', 'integer', 'int32'],
			'TotalBookedWaitlist' => ['totalBookedWaitlist', 'integer', 'int32'],
			'WebBooked' => ['webBooked', 'integer', 'int32'],
			'SemesterId' => ['semesterId', 'integer', 'int32'],
			'IsCanceled' => ['isCanceled', 'boolean', null],
			'Substitute' => ['substitute', 'boolean', null],
			'Active' => ['active', 'boolean', null],
			'IsWaitlistAvailable' => ['isWaitlistAvailable', 'boolean', null],
			'IsEnrolled' => ['isEnrolled', 'boolean', null],
			'HideCancel' => ['hideCancel', 'boolean', null],
			'Id' => ['id', 'integer', 'int32'],
			'IsAvailable' => ['isAvailable', 'boolean', null],
			'StartDateTime' => ['startDateTime', 'string', 'date-time'],
			'EndDateTime' => ['endDateTime', 'string', 'date-time'],
			'LastModifiedDateTime' => ['lastModifiedDateTime', 'string', 'date-time'],
			'ClassDescription' => ['classDescription', ClassDescription::class, null],
			'Staff' => ['staff', Staff::class, null],
			'BookingWindow' => ['bookingWindow', BookingWindow::class, null],
			'BookingStatus' => ['bookingStatus', 'string', null],
			];
	}

	protected function getOutputMap()
	{
		return [
			'classScheduleId' => ['ClassScheduleId', 'integer', 'int32'],
			'visits' => ['Visits', 'array', Visit::class],
			'clients' => ['Clients', 'array', Client::class],
			'location' => ['Location', Location::class, null],
			'resource' => ['Resource', Resource::class, null],
			'maxCapacity' => ['MaxCapacity', 'integer', 'int32'],
			'webCapacity' => ['WebCapacity', 'integer', 'int32'],
			'totalBooked' => ['TotalBooked', 'integer', 'int32'],
			'totalBookedWaitlist' => ['TotalBookedWaitlist', 'integer', 'int32'],
			'webBooked' => ['WebBooked', 'integer', 'int32'],
			'semesterId' => ['SemesterId', 'integer', 'int32'],
			'isCanceled' => ['IsCanceled', 'boolean', null],
			'substitute' => ['Substitute', 'boolean', null],
			'active' => ['Active', 'boolean', null],
			'isWaitlistAvailable' => ['IsWaitlistAvailable', 'boolean', null],
			'isEnrolled' => ['IsEnrolled', 'boolean', null],
			'hideCancel' => ['HideCancel', 'boolean', null],
			'id' => ['Id', 'integer', 'int32'],
			'isAvailable' => ['IsAvailable', 'boolean', null],
			'startDateTime' => ['StartDateTime', 'string', 'date-time'],
			'endDateTime' => ['EndDateTime', 'string', 'date-time'],
			'lastModifiedDateTime' => ['LastModifiedDateTime', 'string', 'date-time'],
			'classDescription' => ['ClassDescription', ClassDescription::class, null],
			'staff' => ['Staff', Staff::class, null],
			'bookingWindow' => ['BookingWindow', BookingWindow::class, null],
			'bookingStatus' => ['BookingStatus', 'string', null],
			];
	}
}
