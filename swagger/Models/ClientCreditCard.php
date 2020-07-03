<?php

namespace App\Mindbody\Models;

/**
 * A client credit card.
 */
class ClientCreditCard extends BaseModel
{
	/**
	 * The billing address for the credit card.
	 * 
	 * @var string 
	 */
	public $address;
	/**
	 * The name of the card holder.
	 * 
	 * @var string 
	 */
	public $cardHolder;
	/**
	 * The credit card number.
	 * 
	 * @var string 
	 */
	public $cardNumber;
	/**
	 * The type of credit card, for example Visa or MasterCard.
	 * 
	 * @var string 
	 */
	public $cardType;
	/**
	 * The city in which the billing address is located.
	 * 
	 * @var string 
	 */
	public $city;
	/**
	 * The month in which the credit card expires.
	 * 
	 * @var string 
	 */
	public $expMonth;
	/**
	 * The year in which the credit card expires.
	 * 
	 * @var string 
	 */
	public $expYear;
	/**
	 * The last four digits of the credit card number.
	 * 
	 * @var string 
	 */
	public $lastFour;
	/**
	 * The postal code where the billing address is located.
	 * 
	 * @var string 
	 */
	public $postalCode;
	/**
	 * The state that the billing address is located in.
	 * 
	 * @var string 
	 */
	public $state;

	protected function getInputMap()
	{
		return [
			'Address' => ['address', 'string', null],
			'CardHolder' => ['cardHolder', 'string', null],
			'CardNumber' => ['cardNumber', 'string', null],
			'CardType' => ['cardType', 'string', null],
			'City' => ['city', 'string', null],
			'ExpMonth' => ['expMonth', 'string', null],
			'ExpYear' => ['expYear', 'string', null],
			'LastFour' => ['lastFour', 'string', null],
			'PostalCode' => ['postalCode', 'string', null],
			'State' => ['state', 'string', null],
			];
	}

	protected function getOutputMap()
	{
		return [
			'address' => ['Address', 'string', null],
			'cardHolder' => ['CardHolder', 'string', null],
			'cardNumber' => ['CardNumber', 'string', null],
			'cardType' => ['CardType', 'string', null],
			'city' => ['City', 'string', null],
			'expMonth' => ['ExpMonth', 'string', null],
			'expYear' => ['ExpYear', 'string', null],
			'lastFour' => ['LastFour', 'string', null],
			'postalCode' => ['PostalCode', 'string', null],
			'state' => ['State', 'string', null],
			];
	}
}
