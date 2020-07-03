<?php

namespace App\Mindbody\Models;

/**
 * no description available
 */
class AddClientDirectDebitInfoResponse extends BaseModel
{
	/**
	 * The ID of the client being updated
	 * 
	 * @var string 
	 */
	public $clientId;
	/**
	 * The name on the bank account being added
	 * 
	 * @var string 
	 */
	public $nameOnAccount;
	/**
	 * The routing number of the bank account being added
	 * 
	 * @var string 
	 */
	public $routingNumber;
	/**
	 * The account number of the bank account being added
	 * 
	 * @var string 
	 */
	public $accountNumber;
	/**
	 * Either "Checking" or "Savings"
	 * 
	 * @var string 
	 */
	public $accountType;

	protected function getInputMap()
	{
		return [
			'ClientId' => ['clientId', 'string', null],
			'NameOnAccount' => ['nameOnAccount', 'string', null],
			'RoutingNumber' => ['routingNumber', 'string', null],
			'AccountNumber' => ['accountNumber', 'string', null],
			'AccountType' => ['accountType', 'string', null],
			];
	}

	protected function getOutputMap()
	{
		return [
			'clientId' => ['ClientId', 'string', null],
			'nameOnAccount' => ['NameOnAccount', 'string', null],
			'routingNumber' => ['RoutingNumber', 'string', null],
			'accountNumber' => ['AccountNumber', 'string', null],
			'accountType' => ['AccountType', 'string', null],
			];
	}
}
