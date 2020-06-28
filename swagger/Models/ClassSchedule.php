<?php

namespace App\MindBody\Models;

/**
 * Represents a single class instance. The class meets at the start time,
 * goes until the end time.
 */
class ClassSchedule extends BaseModel
{
	/**
	 * Contains information about classes.
	 * 
	 * @var Class[] 
	 */
	public $classes;
	/**
	 * Contains information about clients.
	 * 
	 * @var Client[] 
	 */
	public $clients;
	/**
	 * Contains information about the course that the enrollment is a part
	 * of.
	 * 
	 * @var Course 
	 */
	public $course;
	/**
	 * The semester ID for the enrollment (if any).
	 * 
	 * @var integer format:int32
	 */
	public $semesterId;
	/**
	 * When `true`, indicates that the enrollment shows in consumer mode, has
	 * not started yet, and there is room in each class of the enrollment.<br
	 * />  When `false`, indicates that either the enrollment does not show
	 * in consumer mode, has already started, or there is no room in some
	 * classes of the enrollment.
	 * 
	 * @var boolean 
	 */
	public $isAvailable;
	/**
	 * The unique ID of the class schedule.
	 * 
	 * @var integer format:int32
	 */
	public $id;
	/**
	 * Contains information about the class.
	 * 
	 * @var ClassDescription 
	 */
	public $classDescription;
	/**
	 * When `true`, indicates that this schedule occurs on Sundays.
	 * 
	 * @var boolean 
	 */
	public $daySunday;
	/**
	 * When `true`, indicates that this schedule occurs on Mondays.
	 * 
	 * @var boolean 
	 */
	public $dayMonday;
	/**
	 * When `true`, indicates that this schedule occurs on Tuesdays.
	 * 
	 * @var boolean 
	 */
	public $dayTuesday;
	/**
	 * When `true`, indicates that this schedule occurs on Wednesdays.
	 * 
	 * @var boolean 
	 */
	public $dayWednesday;
	/**
	 * When `true`, indicates that this schedule occurs on Thursdays.
	 * 
	 * @var boolean 
	 */
	public $dayThursday;
	/**
	 * When `true`, indicates that this schedule occurs on Fridays.
	 * 
	 * @var boolean 
	 */
	public $dayFriday;
	/**
	 * When `true`, indicates that this schedule occurs on Saturdays.
	 * 
	 * @var boolean 
	 */
	public $daySaturday;
	/**
	 * When `true`, indicates that the enrollment allows booking after the
	 * enrollment has started.
	 * 
	 * @var boolean 
	 */
	public $allowOpenEnrollment;
	/**
	 * When `true`, indicates that this the enrollment shows in consumer
	 * mode, the enrollment has not started yet, and there is room in each
	 * class of the enrollment.
	 * 
	 * @var boolean 
	 */
	public $allowDateForwardEnrollment;
	/**
	 * The time this class schedule starts.
	 * 
	 * @var string format:date-time
	 */
	public $startTime;
	/**
	 * The time this class schedule ends.
	 * 
	 * @var string format:date-time
	 */
	public $endTime;
	/**
	 * The date this class schedule starts.
	 * 
	 * @var string format:date-time
	 */
	public $startDate;
	/**
	 * The date this class schedule ends.
	 * 
	 * @var string format:date-time
	 */
	public $endDate;
	/**
	 * Contains information about the staff member who is regularly scheduled
	 * to teach the class.
	 * 
	 * @var Staff 
	 */
	public $staff;
	/**
	 * Contains information about the regularly scheduled location of this
	 * class.
	 * 
	 * @var Location 
	 */
	public $location;

	protected function getInputMap()
	{
		return [
			'Classes' => ['classes', 'array', Class::class],
			'Clients' => ['clients', 'array', Client::class],
			'Course' => ['course', Course::class, null],
			'SemesterId' => ['semesterId', 'integer', 'int32'],
			'IsAvailable' => ['isAvailable', 'boolean', null],
			'Id' => ['id', 'integer', 'int32'],
			'ClassDescription' => ['classDescription', ClassDescription::class, null],
			'DaySunday' => ['daySunday', 'boolean', null],
			'DayMonday' => ['dayMonday', 'boolean', null],
			'DayTuesday' => ['dayTuesday', 'boolean', null],
			'DayWednesday' => ['dayWednesday', 'boolean', null],
			'DayThursday' => ['dayThursday', 'boolean', null],
			'DayFriday' => ['dayFriday', 'boolean', null],
			'DaySaturday' => ['daySaturday', 'boolean', null],
			'AllowOpenEnrollment' => ['allowOpenEnrollment', 'boolean', null],
			'AllowDateForwardEnrollment' => ['allowDateForwardEnrollment', 'boolean', null],
			'StartTime' => ['startTime', 'string', 'date-time'],
			'EndTime' => ['endTime', 'string', 'date-time'],
			'StartDate' => ['startDate', 'string', 'date-time'],
			'EndDate' => ['endDate', 'string', 'date-time'],
			'Staff' => ['staff', Staff::class, null],
			'Location' => ['location', Location::class, null],
			];
	}

	protected function getOutputMap()
	{
		return [
			'classes' => ['Classes', 'array', Class::class],
			'clients' => ['Clients', 'array', Client::class],
			'course' => ['Course', Course::class, null],
			'semesterId' => ['SemesterId', 'integer', 'int32'],
			'isAvailable' => ['IsAvailable', 'boolean', null],
			'id' => ['Id', 'integer', 'int32'],
			'classDescription' => ['ClassDescription', ClassDescription::class, null],
			'daySunday' => ['DaySunday', 'boolean', null],
			'dayMonday' => ['DayMonday', 'boolean', null],
			'dayTuesday' => ['DayTuesday', 'boolean', null],
			'dayWednesday' => ['DayWednesday', 'boolean', null],
			'dayThursday' => ['DayThursday', 'boolean', null],
			'dayFriday' => ['DayFriday', 'boolean', null],
			'daySaturday' => ['DaySaturday', 'boolean', null],
			'allowOpenEnrollment' => ['AllowOpenEnrollment', 'boolean', null],
			'allowDateForwardEnrollment' => ['AllowDateForwardEnrollment', 'boolean', null],
			'startTime' => ['StartTime', 'string', 'date-time'],
			'endTime' => ['EndTime', 'string', 'date-time'],
			'startDate' => ['StartDate', 'string', 'date-time'],
			'endDate' => ['EndDate', 'string', 'date-time'],
			'staff' => ['Staff', Staff::class, null],
			'location' => ['Location', Location::class, null],
			];
	}
}
