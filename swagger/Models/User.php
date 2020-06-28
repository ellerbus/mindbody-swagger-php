<?php

namespace App\MindBody\Models;

/**
 * no description available
 */
class User extends BaseModel
{
	/**
	 * The user’s ID at the business. This is always 0 for Admin and Owner
	 * type users.
	 * 
	 * @var integer format:int64
	 */
	public $id;
	/**
	 * The user’s first name.
	 * 
	 * @var string 
	 */
	public $firstName;
	/**
	 * The user’s last name.
	 * 
	 * @var string 
	 */
	public $lastName;
	/**
	 * The user’s type. Possible values are:  * Staff  * Owner  * Admin
	 * 
	 * @var string 
	 */
	public $type;

	protected function getInputMap()
	{
		return [
			'Id' => ['id', 'integer', 'int64'],
			'FirstName' => ['firstName', 'string', null],
			'LastName' => ['lastName', 'string', null],
			'Type' => ['type', 'string', null],
			];
	}

	protected function getOutputMap()
	{
		return [
			'id' => ['Id', 'integer', 'int64'],
			'firstName' => ['FirstName', 'string', null],
			'lastName' => ['LastName', 'string', null],
			'type' => ['Type', 'string', null],
			];
	}
}
