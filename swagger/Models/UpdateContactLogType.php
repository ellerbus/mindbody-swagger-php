<?php

namespace App\Mindbody\Models;

/**
 * no description available
 */
class UpdateContactLogType extends BaseModel
{
	/**
	 * The ID of the contact log type to update the subtypes of.
	 * 
	 * @var integer format:int32
	 */
	public $id;
	/**
	 * The subtype IDs that are to be added to the contact log.
	 * 
	 * @var integer[] 
	 */
	public $subTypes;

	protected function getInputMap()
	{
		return [
			'Id' => ['id', 'integer', 'int32'],
			'SubTypes' => ['subTypes', 'array', null],
			];
	}

	protected function getOutputMap()
	{
		return [
			'id' => ['Id', 'integer', 'int32'],
			'subTypes' => ['SubTypes', 'array', null],
			];
	}
}
