<?php

namespace App\MindBody\Models;

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
}
