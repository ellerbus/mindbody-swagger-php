<?php

namespace App\MindBody\Models;

/*
 * Represents a single class instance. The class meets at the start time,
 * goes until the end time.
 */
class ClassSchedule extends BaseModel
{
	/*
	 * Contains information about classes.
	 * 
	 * @var Class[]
	 */
	public $classes;
	/*
	 * Contains information about clients.
	 * 
	 * @var Client[]
	 */
	public $clients;
	/*
	 * Contains information about the course that the enrollment is a part
	 * of.
	 * 
	 * @var Course
	 */
	public $course;
	/*
	 * The semester ID for the enrollment (if any).
	 * 
	 * @var integer
	 */
	public $semesterId;
	/*
	 * When `true`, indicates that the enrollment shows in consumer mode, has
	 * not started yet, and there is room in each class of the enrollment.<br
	 * />  When `false`, indicates that either the enrollment does not show
	 * in consumer mode, has already started, or there is no room in some
	 * classes of the enrollment.
	 * 
	 * @var boolean
	 */
	public $isAvailable;
	/*
	 * The unique ID of the class schedule.
	 * 
	 * @var integer
	 */
	public $id;
	/*
	 * Contains information about the class.
	 * 
	 * @var ClassDescription
	 */
	public $classDescription;
	/*
	 * When `true`, indicates that this schedule occurs on Sundays.
	 * 
	 * @var boolean
	 */
	public $daySunday;
	/*
	 * When `true`, indicates that this schedule occurs on Mondays.
	 * 
	 * @var boolean
	 */
	public $dayMonday;
	/*
	 * When `true`, indicates that this schedule occurs on Tuesdays.
	 * 
	 * @var boolean
	 */
	public $dayTuesday;
	/*
	 * When `true`, indicates that this schedule occurs on Wednesdays.
	 * 
	 * @var boolean
	 */
	public $dayWednesday;
	/*
	 * When `true`, indicates that this schedule occurs on Thursdays.
	 * 
	 * @var boolean
	 */
	public $dayThursday;
	/*
	 * When `true`, indicates that this schedule occurs on Fridays.
	 * 
	 * @var boolean
	 */
	public $dayFriday;
	/*
	 * When `true`, indicates that this schedule occurs on Saturdays.
	 * 
	 * @var boolean
	 */
	public $daySaturday;
	/*
	 * When `true`, indicates that the enrollment allows booking after the
	 * enrollment has started.
	 * 
	 * @var boolean
	 */
	public $allowOpenEnrollment;
	/*
	 * When `true`, indicates that this the enrollment shows in consumer
	 * mode, the enrollment has not started yet, and there is room in each
	 * class of the enrollment.
	 * 
	 * @var boolean
	 */
	public $allowDateForwardEnrollment;
	/*
	 * The time this class schedule starts.
	 * 
	 * @var string
	 */
	public $startTime;
	/*
	 * The time this class schedule ends.
	 * 
	 * @var string
	 */
	public $endTime;
	/*
	 * The date this class schedule starts.
	 * 
	 * @var string
	 */
	public $startDate;
	/*
	 * The date this class schedule ends.
	 * 
	 * @var string
	 */
	public $endDate;
	/*
	 * Contains information about the staff member who is regularly scheduled
	 * to teach the class.
	 * 
	 * @var Staff
	 */
	public $staff;
	/*
	 * Contains information about the regularly scheduled location of this
	 * class.
	 * 
	 * @var Location
	 */
	public $location;
}
