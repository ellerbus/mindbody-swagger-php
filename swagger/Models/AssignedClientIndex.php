<?php

namespace App\MindBody\Models;

/**
 * Represents a client index value assigned to a client
 */
class AssignedClientIndex extends BaseModel
{
	/**
	 * The index ID assigned to the client.
	 * 
	 * @var integer
	 */
	public $id;
	/**
	 * The index’s value ID.
	 * 
	 * @var integer
	 */
	public $valueId;

	protected function getInputMap()
	{
		return [
			'Id' => 'id',
			'ValueId' => 'valueId',
			];
	}

	protected function getOutputMap()
	{
		return [
			'id' => 'Id',
			'valueId' => 'ValueId',
			];
	}
}
