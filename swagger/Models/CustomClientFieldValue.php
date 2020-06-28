<?php

namespace App\MindBody\Models;

/**
 * The value of a custom client field
 */
class CustomClientFieldValue extends BaseModel
{
	/**
	 * The value of a specific custom field for a client.
	 * 
	 * @var string
	 */
	public $value;
	/**
	 * The ID of the custom client field.
	 * 
	 * @var integer
	 */
	public $id;
	/**
	 * The data type of the field.
	 * 
	 * @var string
	 */
	public $dataType;
	/**
	 * The name of the field.
	 * 
	 * @var string
	 */
	public $name;

	protected function getInputMap()
	{
		return [
			'Value' => 'value',
			'Id' => 'id',
			'DataType' => 'dataType',
			'Name' => 'name',
			];
	}

	protected function getOutputMap()
	{
		return [
			'value' => 'Value',
			'id' => 'Id',
			'dataType' => 'DataType',
			'name' => 'Name',
			];
	}
}
