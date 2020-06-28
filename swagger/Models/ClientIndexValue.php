<?php

namespace App\MindBody\Models;

/**
 * A client index value.
 */
class ClientIndexValue extends BaseModel
{
	/**
	 * When `true`, indicates that the index value can be assigned to its
	 * parent index.<br />  When `false`, indicates that the index value has
	 * been deactivated and cannot be assigned to its parent index.
	 * 
	 * @var boolean
	 */
	public $active;
	/**
	 * The index value’s ID.
	 * 
	 * @var integer
	 */
	public $id;
	/**
	 * The name of the client index value.
	 * 
	 * @var string
	 */
	public $name;

	protected function getInputMap()
	{
		return [
			'Active' => 'active',
			'Id' => 'id',
			'Name' => 'name',
			];
	}

	protected function getOutputMap()
	{
		return [
			'active' => 'Active',
			'id' => 'Id',
			'name' => 'Name',
			];
	}
}
