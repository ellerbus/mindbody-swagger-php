<?php

namespace App\Mindbody\Models;

/**
 * no description available
 */
class ProgramMembership extends BaseModel
{
	/**
	 * The service category’s ID.
	 * 
	 * @var integer format:int32
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
			'Id' => ['id', 'integer', 'int32'],
			'Name' => ['name', 'string', null],
			];
	}

	protected function getOutputMap()
	{
		return [
			'id' => ['Id', 'integer', 'int32'],
			'name' => ['Name', 'string', null],
			];
	}
}
