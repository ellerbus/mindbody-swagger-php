<?php

namespace App\MindBody\Models;

/*
 * INformation about an individual credit card
 */
class CreditCardInfo extends BaseModel
{
	/*
	 * no description available
	 * 
	 * @var string
	 */
	public $creditCardNumber;
	/*
	 * no description available
	 * 
	 * @var string
	 */
	public $expMonth;
	/*
	 * no description available
	 * 
	 * @var string
	 */
	public $expYear;
	/*
	 * no description available
	 * 
	 * @var string
	 */
	public $billingName;
	/*
	 * no description available
	 * 
	 * @var string
	 */
	public $billingAddress;
	/*
	 * no description available
	 * 
	 * @var string
	 */
	public $billingCity;
	/*
	 * no description available
	 * 
	 * @var string
	 */
	public $billingState;
	/*
	 * no description available
	 * 
	 * @var string
	 */
	public $billingPostalCode;
	/*
	 * no description available
	 * 
	 * @var boolean
	 */
	public $saveInfo;
}
