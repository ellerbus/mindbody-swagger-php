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
	 * @var integer
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
	 * @var integer
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
			'FirstName' => 'firstName',
			'Id' => 'id',
			'LastName' => 'lastName',
			'SalesRepNumber' => 'salesRepNumber',
			'SalesRepNumbers' => 'salesRepNumbers',
			];
	}

	protected function getOutputMap()
	{
		return [
			'firstName' => 'FirstName',
			'id' => 'Id',
			'lastName' => 'LastName',
			'salesRepNumber' => 'SalesRepNumber',
			'salesRepNumbers' => 'SalesRepNumbers',
			];
	}
}
