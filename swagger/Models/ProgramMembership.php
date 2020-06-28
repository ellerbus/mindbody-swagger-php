<?php

namespace App\MindBody\Models;

/**
 * no description available
 */
class ProgramMembership extends BaseModel
{
	/**
	 * The service category’s ID.
	 * 
	 * @var integer
	 */
	public $id;
	/**
	 * The name of this service category.
	 * 
	 * @var string
	 */
	public $name;

	protected function getInputMap()
	{
		return [
			'Id' => 'id',
			'Name' => 'name',
			];
	}

	protected function getOutputMap()
	{
		return [
			'id' => 'Id',
			'name' => 'Name',
			];
	}
}
