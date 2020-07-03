<?php

namespace App\Mindbody\Models;

/**
 * no description available
 */
class MembershipTypeRestriction extends BaseModel
{
	/**
	 * The ID of the membership that is allowed to purchase the contract.
	 * 
	 * @var integer format:int32
	 */
	public $id;
	/**
	 * The name of the membership type.
	 * 
	 * @var string 
	 */
	public $name;

	protected function getInputMap()
	{
		return [
			'Id' => ['id', 'integer', 'int32'],
			'Name' => ['name', 'string', null],
			];
	}

	protected function getOutputMap()
	{
		return [
			'id' => ['Id', 'integer', 'int32'],
			'name' => ['Name', 'string', null],
			];
	}
}
