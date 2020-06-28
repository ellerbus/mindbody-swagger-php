<?php

namespace App\MindBody\Models;

/**
 * no description available
 */
class CustomPaymentMethod extends BaseModel
{
	/**
	 * The ID of the custom payment method.
	 * 
	 * @var integer
	 */
	public $id;
	/**
	 * The name of the custom payment method.
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
