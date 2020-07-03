<?php

namespace App\Mindbody\Models;

/**
 * A contact log.
 */
class ContactLog extends BaseModel
{
	/**
	 * The contact log’s ID.
	 * 
	 * @var integer format:int64
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
	 * @var string format:date-time
	 */
	public $createdDateTime;
	/**
	 * The date by which the assigned staff member should close or follow up
	 * on this contact log.
	 * 
	 * @var string format:date-time
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

	protected function getInputMap()
	{
		return [
			'Id' => ['id', 'integer', 'int64'],
			'Text' => ['text', 'string', null],
			'CreatedDateTime' => ['createdDateTime', 'string', 'date-time'],
			'FollowupByDate' => ['followupByDate', 'string', 'date-time'],
			'ContactMethod' => ['contactMethod', 'string', null],
			'ContactName' => ['contactName', 'string', null],
			'Client' => ['client', Client::class, null],
			'CreatedBy' => ['createdBy', Staff::class, null],
			'AssignedTo' => ['assignedTo', Staff::class, null],
			'Comments' => ['comments', 'array', ContactLogComment::class],
			'Types' => ['types', 'array', ContactLogType::class],
			];
	}

	protected function getOutputMap()
	{
		return [
			'id' => ['Id', 'integer', 'int64'],
			'text' => ['Text', 'string', null],
			'createdDateTime' => ['CreatedDateTime', 'string', 'date-time'],
			'followupByDate' => ['FollowupByDate', 'string', 'date-time'],
			'contactMethod' => ['ContactMethod', 'string', null],
			'contactName' => ['ContactName', 'string', null],
			'client' => ['Client', Client::class, null],
			'createdBy' => ['CreatedBy', Staff::class, null],
			'assignedTo' => ['AssignedTo', Staff::class, null],
			'comments' => ['Comments', 'array', ContactLogComment::class],
			'types' => ['Types', 'array', ContactLogType::class],
			];
	}
}
