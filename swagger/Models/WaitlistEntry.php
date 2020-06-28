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
	 * @var string format:date-time
	 */
	public $classDate;
	/**
	 * The ID of the class or enrollment.
	 * 
	 * @var integer format:int64
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
	 * @var string format:date-time
	 */
	public $enrollmentDateForward;
	/**
	 * The ID of the waiting list entry.
	 * 
	 * @var integer format:int32
	 */
	public $id;
	/**
	 * The date and time that the request to be on the waiting list was made.
	 * 
	 * @var string format:date-time
	 */
	public $requestDateTime;
	/**
	 * The ID of the visit that is associated with the waiting list entry.
	 * 
	 * @var integer format:int32
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

	protected function getInputMap()
	{
		return [
			'ClassDate' => ['classDate', 'string', 'date-time'],
			'ClassId' => ['classId', 'integer', 'int64'],
			'ClassSchedule' => ['classSchedule', ClassSchedule::class, null],
			'Client' => ['client', Client::class, null],
			'EnrollmentDateForward' => ['enrollmentDateForward', 'string', 'date-time'],
			'Id' => ['id', 'integer', 'int32'],
			'RequestDateTime' => ['requestDateTime', 'string', 'date-time'],
			'VisitRefNo' => ['visitRefNo', 'integer', 'int32'],
			'Web' => ['web', 'boolean', null],
			];
	}

	protected function getOutputMap()
	{
		return [
			'classDate' => ['ClassDate', 'string', 'date-time'],
			'classId' => ['ClassId', 'integer', 'int64'],
			'classSchedule' => ['ClassSchedule', ClassSchedule::class, null],
			'client' => ['Client', Client::class, null],
			'enrollmentDateForward' => ['EnrollmentDateForward', 'string', 'date-time'],
			'id' => ['Id', 'integer', 'int32'],
			'requestDateTime' => ['RequestDateTime', 'string', 'date-time'],
			'visitRefNo' => ['VisitRefNo', 'integer', 'int32'],
			'web' => ['Web', 'boolean', null],
			];
	}
}
