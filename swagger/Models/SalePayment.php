<?php

namespace App\MindBody\Models;

/**
 * no description available
 */
class SalePayment extends BaseModel
{
	/**
	 * A unique identifier for this payment.
	 * 
	 * @var integer
	 */
	public $id;
	/**
	 * The amount of this payment.
	 * 
	 * @var number
	 */
	public $amount;
	/**
	 * The method for this payment.
	 * 
	 * @var integer
	 */
	public $method;
	/**
	 * The type of payment.
	 * 
	 * @var string
	 */
	public $type;
	/**
	 * Notes about this payment.
	 * 
	 * @var string
	 */
	public $notes;
}
