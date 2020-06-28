<?php

namespace App\MindBody\Models;

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
			'Address' => 'address',
			'CardHolder' => 'cardHolder',
			'CardNumber' => 'cardNumber',
			'CardType' => 'cardType',
			'City' => 'city',
			'ExpMonth' => 'expMonth',
			'ExpYear' => 'expYear',
			'LastFour' => 'lastFour',
			'PostalCode' => 'postalCode',
			'State' => 'state',
			];
	}

	protected function getOutputMap()
	{
		return [
			'address' => 'Address',
			'cardHolder' => 'CardHolder',
			'cardNumber' => 'CardNumber',
			'cardType' => 'CardType',
			'city' => 'City',
			'expMonth' => 'ExpMonth',
			'expYear' => 'ExpYear',
			'lastFour' => 'LastFour',
			'postalCode' => 'PostalCode',
			'state' => 'State',
			];
	}
}
