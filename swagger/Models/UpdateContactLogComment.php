<?php

namespace App\MindBody\Models;

/**
 * no description available
 */
class UpdateContactLogComment extends BaseModel
{
	/**
	 * The ID of the contact log comment to be updated. Pass a value of `0`
	 * to add a new comment to the contact log.
	 * 
	 * @var integer
	 */
	public $id;
	/**
	 * The new text for the comment.
	 * 
	 * @var string
	 */
	public $text;

	protected function getInputMap()
	{
		return [
			'Id' => 'id',
			'Text' => 'text',
			];
	}

	protected function getOutputMap()
	{
		return [
			'id' => 'Id',
			'text' => 'Text',
			];
	}
}
