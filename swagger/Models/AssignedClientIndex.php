<?php

namespace App\Mindbody\Models;

/**
 * Represents a client index value assigned to a client
 */
class AssignedClientIndex extends BaseModel
{
	/**
	 * The index ID assigned to the client.
	 * 
	 * @var integer format:int32
	 */
	public $id;
	/**
	 * The index’s value ID.
	 * 
	 * @var integer format:int32
	 */
	public $valueId;

	protected function getInputMap()
	{
		return [
			'Id' => ['id', 'integer', 'int32'],
			'ValueId' => ['valueId', 'integer', 'int32'],
			];
	}

	protected function getOutputMap()
	{
		return [
			'id' => ['Id', 'integer', 'int32'],
			'valueId' => ['ValueId', 'integer', 'int32'],
			];
	}
}
