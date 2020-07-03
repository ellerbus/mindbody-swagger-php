<?php

namespace App\Mindbody\Models;

/**
 * no description available
 */
class SalePayment extends BaseModel
{
	/**
	 * A unique identifier for this payment.
	 * 
	 * @var integer format:int64
	 */
	public $id;
	/**
	 * The amount of this payment.
	 * 
	 * @var number format:double
	 */
	public $amount;
	/**
	 * The method for this payment.
	 * 
	 * @var integer format:int32
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

	protected function getInputMap()
	{
		return [
			'Id' => ['id', 'integer', 'int64'],
			'Amount' => ['amount', 'number', 'double'],
			'Method' => ['method', 'integer', 'int32'],
			'Type' => ['type', 'string', null],
			'Notes' => ['notes', 'string', null],
			];
	}

	protected function getOutputMap()
	{
		return [
			'id' => ['Id', 'integer', 'int64'],
			'amount' => ['Amount', 'number', 'double'],
			'method' => ['Method', 'integer', 'int32'],
			'type' => ['Type', 'string', null],
			'notes' => ['Notes', 'string', null],
			];
	}
}
