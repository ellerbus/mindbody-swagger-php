<?php

namespace App\Mindbody\Models;

/**
 * A color used by products.
 */
class Color extends BaseModel
{
	/**
	 * The ID of the product color.
	 * 
	 * @var integer format:int32
	 */
	public $id;
	/**
	 * The name of the product color.
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
