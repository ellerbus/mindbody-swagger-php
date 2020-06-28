<?php

namespace App\MindBody\Models;

/**
 * A client index.
 */
class ClientIndex extends BaseModel
{
	/**
	 * The unique ID of the client index.
	 * 
	 * @var integer format:int32
	 */
	public $id;
	/**
	 * The name of the client index.
	 * 
	 * @var string 
	 */
	public $name;
	/**
	 * When `true`, indicates that the index is required when creating
	 * profiles in business mode.
	 * 
	 * @var boolean 
	 */
	public $requiredBusinessMode;
	/**
	 * When `true`, indicates that the index is required when creating
	 * profiles in consumer mode.
	 * 
	 * @var boolean 
	 */
	public $requiredConsumerMode;
	/**
	 * Contains information about the index's possible values.
	 * 
	 * @var ClientIndexValue[] 
	 */
	public $values;
	/**
	 * The action performed on this object.
	 * 
	 * @var string 
	 */
	public $action;

	protected function getInputMap()
	{
		return [
			'Id' => ['id', 'integer', 'int32'],
			'Name' => ['name', 'string', null],
			'RequiredBusinessMode' => ['requiredBusinessMode', 'boolean', null],
			'RequiredConsumerMode' => ['requiredConsumerMode', 'boolean', null],
			'Values' => ['values', 'array', ClientIndexValue::class],
			'Action' => ['action', 'string', null],
			];
	}

	protected function getOutputMap()
	{
		return [
			'id' => ['Id', 'integer', 'int32'],
			'name' => ['Name', 'string', null],
			'requiredBusinessMode' => ['RequiredBusinessMode', 'boolean', null],
			'requiredConsumerMode' => ['RequiredConsumerMode', 'boolean', null],
			'values' => ['Values', 'array', ClientIndexValue::class],
			'action' => ['Action', 'string', null],
			];
	}
}
