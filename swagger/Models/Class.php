<?php

namespace App\MindBody\Models;

/**
 * Represents a single class instance. The class meets at the start time,
 * goes until the end time.
 */
class Class extends BaseModel
{
	/**
	 * The ID used to retrieve the class schedule for the desired class.
	 * 
	 * @var integer
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
	 * @var integer
	 */
	public $maxCapacity;
	/**
	 * The maximum number of clients allowed to sign up online for the class.
	 * 
	 * @var integer
	 */
	public $webCapacity;
	/**
	 * The total number of clients booked in the class.
	 * 
	 * @var integer
	 */
	public $totalBooked;
	/**
	 * The total number of booked clients on the waiting list for the class.
	 * 
	 * @var integer
	 */
	public $totalBookedWaitlist;
	/**
	 * The total number of clients who signed up online for the class.
	 * 
	 * @var integer
	 */
	public $webBooked;
	/**
	 * The ID of the semester that the class is a part of, if any.
	 * 
	 * @var integer
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
	 * @var integer
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
	 * @var string
	 */
	public $startDateTime;
	/**
	 * The time this class is scheduled to end.
	 * 
	 * @var string
	 */
	public $endDateTime;
	/**
	 * The last time this class was modified.
	 * 
	 * @var string
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
}
