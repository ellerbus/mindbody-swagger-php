<?php

namespace App\Mindbody\Models;

/**
 * Defines what sort of subtypes we want to add to this contact log type
 */
class AddContactLogType extends BaseModel
{
	/**
	 * The contact log type’s ID.
	 * 
	 * @var integer format:int32
	 */
	public $id;
	/**
	 * A list of the subtype IDs used to tag this contact log type.
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
