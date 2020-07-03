<?php

namespace App\Mindbody\Models;

/**
 * no description available
 */
class AddClientToEnrollmentRequest extends BaseModel
{
	/**
	 * The ID of the client who is being booked into the enrollment.
	 * 
	 * @var string 
	 */
	public $clientId;
	/**
	 * The ID of the class schedule (enrollment) into which the client is
	 * being booked.
	 * 
	 * @var integer format:int32
	 */
	public $classScheduleId;
	/**
	 * Enroll the clients from this date forward. `EnrollDateForward` takes
	 * priority over open enrollment.
	 * 
	 * @var string format:date-time
	 */
	public $enrollDateForward;
	/**
	 * Enroll for selected days.
	 * 
	 * @var string[] 
	 */
	public $enrollOpen;
	/**
	 * When `true`, input information is validated, but not committed.<br />
	 * Default: **false**
	 * 
	 * @var boolean 
	 */
	public $test;
	/**
	 * When `true`, indicates that the client should be sent an email. An
	 * email is only sent if the client has an email address and automatic
	 * emails have been set up.<br />  Default: **false**
	 * 
	 * @var boolean 
	 */
	public $sendEmail;
	/**
	 * When `true`, the client is added to a specific enrollments waiting
	 * list.
	 * 
	 * @var boolean 
	 */
	public $waitlist;
	/**
	 * The waiting list entry to add. Used to add a client to an enrollment
	 * from a waiting list entry.
	 * 
	 * @var integer format:int32
	 */
	public $waitlistEntryId;
	/**
	 * Constructor
	 */
	public function __construct($clientId, $classScheduleId)
	{
		$this->clientId = $clientId;
		$this->classScheduleId = $classScheduleId;
	}

	protected function getInputMap()
	{
		return [
			'ClientId' => ['clientId', 'string', null],
			'ClassScheduleId' => ['classScheduleId', 'integer', 'int32'],
			'EnrollDateForward' => ['enrollDateForward', 'string', 'date-time'],
			'EnrollOpen' => ['enrollOpen', 'array', null],
			'Test' => ['test', 'boolean', null],
			'SendEmail' => ['sendEmail', 'boolean', null],
			'Waitlist' => ['waitlist', 'boolean', null],
			'WaitlistEntryId' => ['waitlistEntryId', 'integer', 'int32'],
			];
	}

	protected function getOutputMap()
	{
		return [
			'clientId' => ['ClientId', 'string', null],
			'classScheduleId' => ['ClassScheduleId', 'integer', 'int32'],
			'enrollDateForward' => ['EnrollDateForward', 'string', 'date-time'],
			'enrollOpen' => ['EnrollOpen', 'array', null],
			'test' => ['Test', 'boolean', null],
			'sendEmail' => ['SendEmail', 'boolean', null],
			'waitlist' => ['Waitlist', 'boolean', null],
			'waitlistEntryId' => ['WaitlistEntryId', 'integer', 'int32'],
			];
	}
}
