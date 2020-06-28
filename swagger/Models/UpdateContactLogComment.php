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
	 * @var integer format:int32
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
			'Id' => ['id', 'integer', 'int32'],
			'Text' => ['text', 'string', null],
			];
	}

	protected function getOutputMap()
	{
		return [
			'id' => ['Id', 'integer', 'int32'],
			'text' => ['Text', 'string', null],
			];
	}
}
