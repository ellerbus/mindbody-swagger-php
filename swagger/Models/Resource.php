<?php

namespace App\Mindbody\Models;

/**
 * Contains information about resources, such as rooms.
 */
class Resource extends BaseModel
{
	/**
	 * The ID of the resource.
	 * 
	 * @var integer format:int32
	 */
	public $id;
	/**
	 * The name of the resource.
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
