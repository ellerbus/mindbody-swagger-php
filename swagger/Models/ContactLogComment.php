<?php

namespace App\MindBody\Models;

/**
 * A contact log comment.
 */
class ContactLogComment extends BaseModel
{
	/**
	 * The comment’s ID.
	 * 
	 * @var integer
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
	 * @var string
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
			'Id' => 'id',
			'Text' => 'text',
			'CreatedDateTime' => 'createdDateTime',
			'CreatedBy' => ['createdBy', Staff::class],
			];
	}

	protected function getOutputMap()
	{
		return [
			'id' => 'Id',
			'text' => 'Text',
			'createdDateTime' => 'CreatedDateTime',
			'createdBy' => 'CreatedBy',
			];
	}
}
