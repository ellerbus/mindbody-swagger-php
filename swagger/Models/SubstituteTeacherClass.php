<?php

namespace App\MindBody\Models;

/**
 * Represents a single class instance. Used in SubstituteClassTeacher
 * endpoint.
 */
class SubstituteTeacherClass extends BaseModel
{
	/**
	 * The class schedule ID of the requested class.
	 * 
	 * @var integer
	 */
	public $classScheduleId;
	/**
	 * Contains information about the location where the class is taking
	 * place.
	 * 
	 * @var Location
	 */
	public $location;
	/**
	 * The total number of bookings allowed in the class.
	 * 
	 * @var integer
	 */
	public $maxCapacity;
	/**
	 * The total number of online bookings allowed in the class.
	 * 
	 * @var integer
	 */
	public $webCapacity;
	/**
	 * The total number of clients who are booked into the class prior to
	 * this call being made.
	 * 
	 * @var integer
	 */
	public $totalBooked;
	/**
	 * The total number of booked clients who are on the waiting list for the
	 * class prior to this call being made.
	 * 
	 * @var integer
	 */
	public $totalBookedWaitlist;
	/**
	 * The total number of bookings in the class made by online users, prior
	 * to this call being made. This property is the current number of
	 * bookings counted toward the `WebCapacity` limit.
	 * 
	 * @var integer
	 */
	public $webBooked;
	/**
	 * Identifies the semester assigned to this class.
	 * 
	 * @var integer
	 */
	public $semesterId;
	/**
	 * When `true`, indicates that the class has been canceled.<br />  When
	 * `false`, indicates that the class has not been canceled and may still
	 * be bookable.
	 * 
	 * @var boolean
	 */
	public $isCanceled;
	/**
	 * When `true`, indicates that the class is being taught by a substitute
	 * teacher.
	 * 
	 * @var boolean
	 */
	public $substitute;
	/**
	 * When `true`, indicates that the class is being shown to clients in
	 * consumer mode.
	 * 
	 * @var boolean
	 */
	public $active;
	/**
	 * When `true`, indicates that the class has a waiting list and there is
	 * space available on the waiting list for another client.<br />  When
	 * `false`, indicates either that the class does not have a waiting list
	 * or there is no space available on the class waiting list.
	 * 
	 * @var boolean
	 */
	public $isWaitlistAvailable;
	/**
	 * When `true`, indicates that this class is should not be shown to
	 * clients when `IsCancelled` is `true`.<br />  When `false`, indicates
	 * that this class is should be shown to clients when `IsCancelled` is
	 * `true`.<br />  This property can be ignored when the `IsCancelled`
	 * property is `false`.
	 * 
	 * @var boolean
	 */
	public $hideCancel;
	/**
	 * The unique identifier of the class.
	 * 
	 * @var integer
	 */
	public $id;
	/**
	 * When `true`, indicates that the class can be booked.<br />  When
	 * `false`, that the class cannot be booked at this time.
	 * 
	 * @var boolean
	 */
	public $isAvailable;
	/**
	 * The date and time that this class is scheduled to start.
	 * 
	 * @var string
	 */
	public $startDateTime;
	/**
	 * The date and time when this class is scheduled to end.
	 * 
	 * @var string
	 */
	public $endDateTime;
	/**
	 * The last time the class was modified.
	 * 
	 * @var string
	 */
	public $lastModifiedDateTime;
	/**
	 * Contains information about this class.
	 * 
	 * @var ClassDescription
	 */
	public $classDescription;
	/**
	 * Contains information about the teacher of the class.
	 * 
	 * @var Staff
	 */
	public $staff;
}
