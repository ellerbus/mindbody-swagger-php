<?php

namespace App\Mindbody\Models;

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
	 * @var integer format:int32
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
			'Value' => ['value', 'string', null],
			'Id' => ['id', 'integer', 'int32'],
			'DataType' => ['dataType', 'string', null],
			'Name' => ['name', 'string', null],
			];
	}

	protected function getOutputMap()
	{
		return [
			'value' => ['Value', 'string', null],
			'id' => ['Id', 'integer', 'int32'],
			'dataType' => ['DataType', 'string', null],
			'name' => ['Name', 'string', null],
			];
	}
}
