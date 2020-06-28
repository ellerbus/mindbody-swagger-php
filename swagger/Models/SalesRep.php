<?php

namespace App\MindBody\Models;

/**
 * no description available
 */
class SalesRep extends BaseModel
{
	/**
	 * The first name of the sales representative.
	 * 
	 * @var string 
	 */
	public $firstName;
	/**
	 * The staff ID of the sales representative.
	 * 
	 * @var integer format:int64
	 */
	public $id;
	/**
	 * The last name of the sales representative.
	 * 
	 * @var string 
	 */
	public $lastName;
	/**
	 * This value is the number that identifies the type of sales
	 * representative assigned to this client. One to six types of sales
	 * representatives can be assigned to a client at any given time,
	 * depending on site settings.
	 * 
	 * @var integer format:int32
	 */
	public $salesRepNumber;
	/**
	 * A list of the different types of sales representative functions
	 * assigned to this staff member.
	 * 
	 * @var integer[] 
	 */
	public $salesRepNumbers;

	protected function getInputMap()
	{
		return [
			'FirstName' => ['firstName', 'string', null],
			'Id' => ['id', 'integer', 'int64'],
			'LastName' => ['lastName', 'string', null],
			'SalesRepNumber' => ['salesRepNumber', 'integer', 'int32'],
			'SalesRepNumbers' => ['salesRepNumbers', 'array', null],
			];
	}

	protected function getOutputMap()
	{
		return [
			'firstName' => ['FirstName', 'string', null],
			'id' => ['Id', 'integer', 'int64'],
			'lastName' => ['LastName', 'string', null],
			'salesRepNumber' => ['SalesRepNumber', 'integer', 'int32'],
			'salesRepNumbers' => ['SalesRepNumbers', 'array', null],
			];
	}
}
