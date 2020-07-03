<?php

namespace App\Mindbody\Models;

/**
 * A session level.
 */
class Level extends BaseModel
{
	/**
	 * The level's ID.
	 * 
	 * @var integer format:int32
	 */
	public $id;
	/**
	 * The level's name.
	 * 
	 * @var string 
	 */
	public $name;
	/**
	 * The level's description.
	 * 
	 * @var string 
	 */
	public $description;

	protected function getInputMap()
	{
		return [
			'Id' => ['id', 'integer', 'int32'],
			'Name' => ['name', 'string', null],
			'Description' => ['description', 'string', null],
			];
	}

	protected function getOutputMap()
	{
		return [
			'id' => ['Id', 'integer', 'int32'],
			'name' => ['Name', 'string', null],
			'description' => ['Description', 'string', null],
			];
	}
}
