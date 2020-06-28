<?php

namespace App\MindBody\Models;

/**
 * A session level.
 */
class Level extends BaseModel
{
	/**
	 * The level's ID.
	 * 
	 * @var integer
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
			'Id' => 'id',
			'Name' => 'name',
			'Description' => 'description',
			];
	}

	protected function getOutputMap()
	{
		return [
			'id' => 'Id',
			'name' => 'Name',
			'description' => 'Description',
			];
	}
}
