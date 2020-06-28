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
	 * @var integer
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
			'Id' => 'id',
			'Name' => 'name',
			'RequiredBusinessMode' => 'requiredBusinessMode',
			'RequiredConsumerMode' => 'requiredConsumerMode',
			'Values' => ['values', ClientIndexValue::class],
			'Action' => 'action',
			];
	}

	protected function getOutputMap()
	{
		return [
			'id' => 'Id',
			'name' => 'Name',
			'requiredBusinessMode' => 'RequiredBusinessMode',
			'requiredConsumerMode' => 'RequiredConsumerMode',
			'values' => 'Values',
			'action' => 'Action',
			];
	}
}
