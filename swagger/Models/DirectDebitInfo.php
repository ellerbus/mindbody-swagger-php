<?php

namespace App\Mindbody\Models;

/**
 * no description available
 */
class DirectDebitInfo extends BaseModel
{
	/**
	 * The name on the bank account.
	 * 
	 * @var string 
	 */
	public $nameOnAccount;
	/**
	 * The routing number for the bank.
	 * 
	 * @var string 
	 */
	public $routingNumber;
	/**
	 * The bank account number.
	 * 
	 * @var string 
	 */
	public $accountNumber;
	/**
	 * The account type. Either Checking or Savings.
	 * 
	 * @var string 
	 */
	public $accountType;

	protected function getInputMap()
	{
		return [
			'NameOnAccount' => ['nameOnAccount', 'string', null],
			'RoutingNumber' => ['routingNumber', 'string', null],
			'AccountNumber' => ['accountNumber', 'string', null],
			'AccountType' => ['accountType', 'string', null],
			];
	}

	protected function getOutputMap()
	{
		return [
			'nameOnAccount' => ['NameOnAccount', 'string', null],
			'routingNumber' => ['RoutingNumber', 'string', null],
			'accountNumber' => ['AccountNumber', 'string', null],
			'accountType' => ['AccountType', 'string', null],
			];
	}
}
