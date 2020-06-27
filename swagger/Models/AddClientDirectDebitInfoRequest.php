<?php

namespace App\MindBody\Models;

/*
 * no description available
 */
class AddClientDirectDebitInfoRequest extends BaseModel
{
	/*
	 * A value of true performs a dry run exectuion
	 * 
	 * @var boolean
	 */
	public $test;
	/*
	 * The ID of the client being updated
	 * 
	 * @var string
	 */
	public $clientId;
	/*
	 * The name on the bank account being added
	 * 
	 * @var string
	 */
	public $nameOnAccount;
	/*
	 * The routing number of the bank account being added
	 * 
	 * @var string
	 */
	public $routingNumber;
	/*
	 * The account number of the bank account being added
	 * 
	 * @var string
	 */
	public $accountNumber;
	/*
	 * Either "Checking" or "Savings"
	 * 
	 * @var string
	 */
	public $accountType;
}
