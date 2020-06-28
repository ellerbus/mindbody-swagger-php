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
	 * @var integer
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
