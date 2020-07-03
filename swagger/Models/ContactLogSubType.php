<?php

namespace App\Mindbody\Models;

/**
 * A contact log subtype.
 */
class ContactLogSubType extends BaseModel
{
	/**
	 * The contact log subtype’s ID.
	 * 
	 * @var integer format:int32
	 */
	public $id;

	protected function getInputMap()
	{
		return [
			'Id' => ['id', 'integer', 'int32'],
			];
	}

	protected function getOutputMap()
	{
		return [
			'id' => ['Id', 'integer', 'int32'],
			];
	}
}
