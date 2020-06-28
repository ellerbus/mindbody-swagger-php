<?php

namespace App\MindBody\Models;

/**
 * A contact log type.
 */
class ContactLogType extends BaseModel
{
	/**
	 * The contact log type’s ID.
	 * 
	 * @var integer
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
			'Id' => 'id',
			'SubTypes' => ['subTypes', ContactLogSubType::class],
			];
	}

	protected function getOutputMap()
	{
		return [
			'id' => 'Id',
			'subTypes' => 'SubTypes',
			];
	}
}
