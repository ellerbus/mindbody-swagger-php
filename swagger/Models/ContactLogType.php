<?php

namespace App\Mindbody\Models;

/**
 * A contact log type.
 */
class ContactLogType extends BaseModel
{
	/**
	 * The contact log type’s ID.
	 * 
	 * @var integer format:int32
	 */
	public $id;
	/**
	 * A list of the subtypes being used to tag this contact log type.
	 * 
	 * @var ContactLogSubType[] 
	 */
	public $subTypes;

	protected function getInputMap()
	{
		return [
			'Id' => ['id', 'integer', 'int32'],
			'SubTypes' => ['subTypes', 'array', ContactLogSubType::class],
			];
	}

	protected function getOutputMap()
	{
		return [
			'id' => ['Id', 'integer', 'int32'],
			'subTypes' => ['SubTypes', 'array', ContactLogSubType::class],
			];
	}
}
