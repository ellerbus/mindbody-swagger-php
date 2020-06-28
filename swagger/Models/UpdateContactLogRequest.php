<?php

namespace App\MindBody\Models;

/**
 * no description available
 */
class UpdateContactLogRequest extends BaseModel
{
	/**
	 * The ID of the contact log being updated.
	 * 
	 * @var integer
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
	 * @var integer
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
	 * @var string
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
}
