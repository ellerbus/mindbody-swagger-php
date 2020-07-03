<?php

namespace App\Mindbody\Models;

/**
 * no description available
 */
class UpdateContactLogRequest extends BaseModel
{
	/**
	 * The ID of the contact log being updated.
	 * 
	 * @var integer format:int32
	 */
	public $id;
	/**
	 * When `true`, indicates that this is a test request and no data is
	 * inserted into the subscriber’s database.<br />  When `false`, the
	 * database is updated.
	 * 
	 * @var boolean 
	 */
	public $test;
	/**
	 * The ID of the staff member to whom the contact log is now being
	 * assigned.
	 * 
	 * @var integer format:int64
	 */
	public $assignedToStaffId;
	/**
	 * The contact log’s new text.
	 * 
	 * @var string 
	 */
	public $text;
	/**
	 * The name of the new person to be contacted by the assigned staff
	 * member.
	 * 
	 * @var string 
	 */
	public $contactName;
	/**
	 * The new date by which the assigned staff member should complete this
	 * contact log.
	 * 
	 * @var string format:date-time
	 */
	public $followupByDate;
	/**
	 * The new method by which the client wants to be contacted.
	 * 
	 * @var string 
	 */
	public $contactMethod;
	/**
	 * Contains information about the comments being updated or added to the
	 * contact log. Comments that have an ID of `0` are added to the contact
	 * log.
	 * 
	 * @var UpdateContactLogComment[] 
	 */
	public $comments;
	/**
	 * Contains information about the contact logs types being assigned to
	 * the contact log, in addition to the contact log types that are already
	 * assigned.
	 * 
	 * @var UpdateContactLogType[] 
	 */
	public $types;

	protected function getInputMap()
	{
		return [
			'Id' => ['id', 'integer', 'int32'],
			'Test' => ['test', 'boolean', null],
			'AssignedToStaffId' => ['assignedToStaffId', 'integer', 'int64'],
			'Text' => ['text', 'string', null],
			'ContactName' => ['contactName', 'string', null],
			'FollowupByDate' => ['followupByDate', 'string', 'date-time'],
			'ContactMethod' => ['contactMethod', 'string', null],
			'Comments' => ['comments', 'array', UpdateContactLogComment::class],
			'Types' => ['types', 'array', UpdateContactLogType::class],
			];
	}

	protected function getOutputMap()
	{
		return [
			'id' => ['Id', 'integer', 'int32'],
			'test' => ['Test', 'boolean', null],
			'assignedToStaffId' => ['AssignedToStaffId', 'integer', 'int64'],
			'text' => ['Text', 'string', null],
			'contactName' => ['ContactName', 'string', null],
			'followupByDate' => ['FollowupByDate', 'string', 'date-time'],
			'contactMethod' => ['ContactMethod', 'string', null],
			'comments' => ['Comments', 'array', UpdateContactLogComment::class],
			'types' => ['Types', 'array', UpdateContactLogType::class],
			];
	}
}
