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
	 * @var integer
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
