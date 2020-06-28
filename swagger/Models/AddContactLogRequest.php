<?php

namespace App\MindBody\Models;

/*
 * no description available
 */
class AddContactLogRequest extends BaseModel
{
	/*
	 * The ID of the client whose contact log is being added.
	 * 
	 * @var string
	 */
	public $clientId;
	/*
	 * The ID of the staff member to whom the contact log is assigned.
	 * 
	 * @var integer
	 */
	public $assignedToStaffId;
	/*
	 * The body of the contact log.
	 * 
	 * @var string
	 */
	public $text;
	/*
	 * The date by which the assigned staff member should complete this
	 * contact log.
	 * 
	 * @var string
	 */
	public $followupByDate;
	/*
	 * How the client wants to be contacted.
	 * 
	 * @var string
	 */
	public $contactMethod;
	/*
	 * The name of the person to be contacted by the assigned staff member.
	 * 
	 * @var string
	 */
	public $contactName;
	/*
	 * Any comments on the contact log.
	 * 
	 * @var string[]
	 */
	public $comments;
	/*
	 * The contact log types used to tag this contact log.
	 * 
	 * @var AddContactLogType[]
	 */
	public $types;
	/*
	 * When `true`, indicates that this is a test request and no data is
	 * inserted into the subscriber’s database.<br />  When `false`, the
	 * database is updated.
	 * 
	 * @var boolean
	 */
	public $test;
	/*
	 * Constructor
	 */
	public function __construct($clientId, $contactMethod)
	{
		$this->clientId = $clientId;
		$this->contactMethod = $contactMethod;
	}
}
