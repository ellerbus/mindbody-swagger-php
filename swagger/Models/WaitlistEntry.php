<?php

namespace App\MindBody\Models;

/**
 * no description available
 */
class WaitlistEntry extends BaseModel
{
	/**
	 * The date of the class or enrollment.
	 * 
	 * @var string
	 */
	public $classDate;
	/**
	 * The ID of the class or enrollment.
	 * 
	 * @var integer
	 */
	public $classId;
	/**
	 * Contains information about the class schedule for this waiting list
	 * entry.
	 * 
	 * @var ClassSchedule
	 */
	public $classSchedule;
	/**
	 * Contains information about the requested client who is on the waiting
	 * list.
	 * 
	 * @var Client
	 */
	public $client;
	/**
	 * If the waiting list entry was created for an enrollment, this is the
	 * date on or after which the client can be added to the enrollment from
	 * the waitlist.
	 * 
	 * @var string
	 */
	public $enrollmentDateForward;
	/**
	 * The ID of the waiting list entry.
	 * 
	 * @var integer
	 */
	public $id;
	/**
	 * The date and time that the request to be on the waiting list was made.
	 * 
	 * @var string
	 */
	public $requestDateTime;
	/**
	 * The ID of the visit that is associated with the waiting list entry.
	 * 
	 * @var integer
	 */
	public $visitRefNo;
	/**
	 * If `true`, the entry on the waiting list was requested online.<br />
	 * If `false`, the entry on the waiting list was requested off-line, for
	 * example in person or by phone.
	 * 
	 * @var boolean
	 */
	public $web;
}
