<?php

namespace App\Mindbody\Models;

/**
 * A contact log comment.
 */
class ContactLogComment extends BaseModel
{
	/**
	 * The comment’s ID.
	 * 
	 * @var integer format:int32
	 */
	public $id;
	/**
	 * The comment’s body text.
	 * 
	 * @var string 
	 */
	public $text;
	/**
	 * The local time when the comment was created.
	 * 
	 * @var string format:date-time
	 */
	public $createdDateTime;
	/**
	 * Information about the staff member who created the comment.
	 * 
	 * @var Staff 
	 */
	public $createdBy;

	protected function getInputMap()
	{
		return [
			'Id' => ['id', 'integer', 'int32'],
			'Text' => ['text', 'string', null],
			'CreatedDateTime' => ['createdDateTime', 'string', 'date-time'],
			'CreatedBy' => ['createdBy', Staff::class, null],
			];
	}

	protected function getOutputMap()
	{
		return [
			'id' => ['Id', 'integer', 'int32'],
			'text' => ['Text', 'string', null],
			'createdDateTime' => ['CreatedDateTime', 'string', 'date-time'],
			'createdBy' => ['CreatedBy', Staff::class, null],
			];
	}
}
