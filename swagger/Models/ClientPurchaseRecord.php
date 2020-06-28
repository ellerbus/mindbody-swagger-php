<?php

namespace App\MindBody\Models;

/**
 * A record of a specific client purchase
 */
class ClientPurchaseRecord extends BaseModel
{
	/**
	 * Contains details about the sale and payment for a purchase event.
	 * 
	 * @var Sale 
	 */
	public $sale;
	/**
	 * The item name and description.
	 * 
	 * @var string 
	 */
	public $description;
	/**
	 * If `true`, the item was a payment credited to an account.
	 * 
	 * @var boolean 
	 */
	public $accountPayment;
	/**
	 * The item's price before taxes and discounts.
	 * 
	 * @var number format:double
	 */
	public $price;
	/**
	 * The amount paid for the item.
	 * 
	 * @var number format:double
	 */
	public $amountPaid;
	/**
	 * The discount amount that was applied to the item.
	 * 
	 * @var number format:double
	 */
	public $discount;
	/**
	 * The amount of tax that was applied to the item.
	 * 
	 * @var number format:double
	 */
	public $tax;
	/**
	 * The return status of the item. If `true`, this item was returned.
	 * 
	 * @var boolean 
	 */
	public $returned;
	/**
	 * The quantity of the item purchased.
	 * 
	 * @var integer format:int32
	 */
	public $quantity;

	protected function getInputMap()
	{
		return [
			'Sale' => ['sale', Sale::class, null],
			'Description' => ['description', 'string', null],
			'AccountPayment' => ['accountPayment', 'boolean', null],
			'Price' => ['price', 'number', 'double'],
			'AmountPaid' => ['amountPaid', 'number', 'double'],
			'Discount' => ['discount', 'number', 'double'],
			'Tax' => ['tax', 'number', 'double'],
			'Returned' => ['returned', 'boolean', null],
			'Quantity' => ['quantity', 'integer', 'int32'],
			];
	}

	protected function getOutputMap()
	{
		return [
			'sale' => ['Sale', Sale::class, null],
			'description' => ['Description', 'string', null],
			'accountPayment' => ['AccountPayment', 'boolean', null],
			'price' => ['Price', 'number', 'double'],
			'amountPaid' => ['AmountPaid', 'number', 'double'],
			'discount' => ['Discount', 'number', 'double'],
			'tax' => ['Tax', 'number', 'double'],
			'returned' => ['Returned', 'boolean', null],
			'quantity' => ['Quantity', 'integer', 'int32'],
			];
	}
}
