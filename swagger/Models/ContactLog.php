<?php

namespace App\MindBody\Models;

/**
 * A contact log.
 */
class ContactLog extends BaseModel
{
	/**
	 * The contact log’s ID.
	 * 
	 * @var integer
	 */
	public $id;
	/**
	 * The contact log’s body text.
	 * 
	 * @var string
	 */
	public $text;
	/**
	 * The local date and time when the contact log was created.
	 * 
	 * @var string
	 */
	public $createdDateTime;
	/**
	 * The date by which the assigned staff member should close or follow up
	 * on this contact log.
	 * 
	 * @var string
	 */
	public $followupByDate;
	/**
	 * The method by which the client wants to be contacted.
	 * 
	 * @var string
	 */
	public $contactMethod;
	/**
	 * The name of the client to contact.
	 * 
	 * @var string
	 */
	public $contactName;
	/**
	 * Information about the client to whom the contact log belongs.
	 * 
	 * @var Client
	 */
	public $client;
	/**
	 * Information about the staff member who created the contact log.
	 * 
	 * @var Staff
	 */
	public $createdBy;
	/**
	 * Information about the staff member to whom the contact log is assigned
	 * for follow up.
	 * 
	 * @var Staff
	 */
	public $assignedTo;
	/**
	 * The contact log’s comments.
	 * 
	 * @var ContactLogComment[]
	 */
	public $comments;
	/**
	 * Contains information about contact log types.
	 * 
	 * @var ContactLogType[]
	 */
	public $types;
}
