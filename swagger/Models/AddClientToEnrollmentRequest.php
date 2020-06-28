<?php

namespace App\MindBody\Models;

/*
 * no description available
 */
class AddClientToEnrollmentRequest extends BaseModel
{
	/*
	 * The ID of the client who is being booked into the enrollment.
	 * 
	 * @var string
	 */
	public $clientId;
	/*
	 * The ID of the class schedule (enrollment) into which the client is
	 * being booked.
	 * 
	 * @var integer
	 */
	public $classScheduleId;
	/*
	 * Enroll the clients from this date forward. `EnrollDateForward` takes
	 * priority over open enrollment.
	 * 
	 * @var string
	 */
	public $enrollDateForward;
	/*
	 * Enroll for selected days.
	 * 
	 * @var string[]
	 */
	public $enrollOpen;
	/*
	 * When `true`, input information is validated, but not committed.<br />
	 * Default: **false**
	 * 
	 * @var boolean
	 */
	public $test;
	/*
	 * When `true`, indicates that the client should be sent an email. An
	 * email is only sent if the client has an email address and automatic
	 * emails have been set up.<br />  Default: **false**
	 * 
	 * @var boolean
	 */
	public $sendEmail;
	/*
	 * When `true`, the client is added to a specific enrollments waiting
	 * list.
	 * 
	 * @var boolean
	 */
	public $waitlist;
	/*
	 * The waiting list entry to add. Used to add a client to an enrollment
	 * from a waiting list entry.
	 * 
	 * @var integer
	 */
	public $waitlistEntryId;
	/*
	 * Constructor
	 */
	public function __construct($clientId, $classScheduleId)
	{
		$this->clientId = $clientId;
		$this->classScheduleId = $classScheduleId;
	}
}
