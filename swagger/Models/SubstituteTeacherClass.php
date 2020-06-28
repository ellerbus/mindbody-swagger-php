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
	 * @var integer format:int32
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
	 * @var integer format:int32
	 */
	public $maxCapacity;
	/**
	 * The total number of online bookings allowed in the class.
	 * 
	 * @var integer format:int32
	 */
	public $webCapacity;
	/**
	 * The total number of clients who are booked into the class prior to
	 * this call being made.
	 * 
	 * @var integer format:int32
	 */
	public $totalBooked;
	/**
	 * The total number of booked clients who are on the waiting list for the
	 * class prior to this call being made.
	 * 
	 * @var integer format:int32
	 */
	public $totalBookedWaitlist;
	/**
	 * The total number of bookings in the class made by online users, prior
	 * to this call being made. This property is the current number of
	 * bookings counted toward the `WebCapacity` limit.
	 * 
	 * @var integer format:int32
	 */
	public $webBooked;
	/**
	 * Identifies the semester assigned to this class.
	 * 
	 * @var integer format:int32
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
	 * @var integer format:int32
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
	 * @var string format:date-time
	 */
	public $startDateTime;
	/**
	 * The date and time when this class is scheduled to end.
	 * 
	 * @var string format:date-time
	 */
	public $endDateTime;
	/**
	 * The last time the class was modified.
	 * 
	 * @var string format:date-time
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

	protected function getInputMap()
	{
		return [
			'ClassScheduleId' => ['classScheduleId', 'integer', 'int32'],
			'Location' => ['location', Location::class, null],
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
			'HideCancel' => ['hideCancel', 'boolean', null],
			'Id' => ['id', 'integer', 'int32'],
			'IsAvailable' => ['isAvailable', 'boolean', null],
			'StartDateTime' => ['startDateTime', 'string', 'date-time'],
			'EndDateTime' => ['endDateTime', 'string', 'date-time'],
			'LastModifiedDateTime' => ['lastModifiedDateTime', 'string', 'date-time'],
			'ClassDescription' => ['classDescription', ClassDescription::class, null],
			'Staff' => ['staff', Staff::class, null],
			];
	}

	protected function getOutputMap()
	{
		return [
			'classScheduleId' => ['ClassScheduleId', 'integer', 'int32'],
			'location' => ['Location', Location::class, null],
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
			'hideCancel' => ['HideCancel', 'boolean', null],
			'id' => ['Id', 'integer', 'int32'],
			'isAvailable' => ['IsAvailable', 'boolean', null],
			'startDateTime' => ['StartDateTime', 'string', 'date-time'],
			'endDateTime' => ['EndDateTime', 'string', 'date-time'],
			'lastModifiedDateTime' => ['LastModifiedDateTime', 'string', 'date-time'],
			'classDescription' => ['ClassDescription', ClassDescription::class, null],
			'staff' => ['Staff', Staff::class, null],
			];
	}
}
