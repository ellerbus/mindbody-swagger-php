<?php

namespace App\MindBody\Models;

/**
 * no description available
 */
class Size extends BaseModel
{
	/**
	 * The ID of the product size.
	 * 
	 * @var integer format:int32
	 */
	public $id;
	/**
	 * The name of the product size.
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
