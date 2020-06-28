<?php

namespace App\MindBody\Models;

/**
 * A contact log subtype.
 */
class ContactLogSubType extends BaseModel
{
	/**
	 * The contact log subtype’s ID.
	 * 
	 * @var integer
	 */
	public $id;

	protected function getInputMap()
	{
		return [
			'Id' => 'id',
			];
	}

	protected function getOutputMap()
	{
		return [
			'id' => 'Id',
			];
	}
}
