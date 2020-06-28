<?php

namespace App\MindBody\Models;

/**
 * A custom client field
 */
class CustomClientField extends BaseModel
{
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
			'Id' => ['id', 'integer', 'int32'],
			'DataType' => ['dataType', 'string', null],
			'Name' => ['name', 'string', null],
			];
	}

	protected function getOutputMap()
	{
		return [
			'id' => ['Id', 'integer', 'int32'],
			'dataType' => ['DataType', 'string', null],
			'name' => ['Name', 'string', null],
			];
	}
}
