<?php

namespace App\MindBody\Models;

/**
 * Definition of a location amenity
 */
class Amenity extends BaseModel
{
	/**
	 * The ID number of the amenity.
	 * 
	 * @var integer format:int32
	 */
	public $id;
	/**
	 * The name of the amenity, for example, food or lockers.
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
