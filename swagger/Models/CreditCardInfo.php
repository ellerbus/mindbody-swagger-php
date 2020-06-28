<?php

namespace App\MindBody\Models;

/**
 * INformation about an individual credit card
 */
class CreditCardInfo extends BaseModel
{
	/**
	 * no description available
	 * 
	 * @var string 
	 */
	public $creditCardNumber;
	/**
	 * no description available
	 * 
	 * @var string 
	 */
	public $expMonth;
	/**
	 * no description available
	 * 
	 * @var string 
	 */
	public $expYear;
	/**
	 * no description available
	 * 
	 * @var string 
	 */
	public $billingName;
	/**
	 * no description available
	 * 
	 * @var string 
	 */
	public $billingAddress;
	/**
	 * no description available
	 * 
	 * @var string 
	 */
	public $billingCity;
	/**
	 * no description available
	 * 
	 * @var string 
	 */
	public $billingState;
	/**
	 * no description available
	 * 
	 * @var string 
	 */
	public $billingPostalCode;
	/**
	 * no description available
	 * 
	 * @var boolean 
	 */
	public $saveInfo;

	protected function getInputMap()
	{
		return [
			'CreditCardNumber' => ['creditCardNumber', 'string', null],
			'ExpMonth' => ['expMonth', 'string', null],
			'ExpYear' => ['expYear', 'string', null],
			'BillingName' => ['billingName', 'string', null],
			'BillingAddress' => ['billingAddress', 'string', null],
			'BillingCity' => ['billingCity', 'string', null],
			'BillingState' => ['billingState', 'string', null],
			'BillingPostalCode' => ['billingPostalCode', 'string', null],
			'SaveInfo' => ['saveInfo', 'boolean', null],
			];
	}

	protected function getOutputMap()
	{
		return [
			'creditCardNumber' => ['CreditCardNumber', 'string', null],
			'expMonth' => ['ExpMonth', 'string', null],
			'expYear' => ['ExpYear', 'string', null],
			'billingName' => ['BillingName', 'string', null],
			'billingAddress' => ['BillingAddress', 'string', null],
			'billingCity' => ['BillingCity', 'string', null],
			'billingState' => ['BillingState', 'string', null],
			'billingPostalCode' => ['BillingPostalCode', 'string', null],
			'saveInfo' => ['SaveInfo', 'boolean', null],
			];
	}
}
