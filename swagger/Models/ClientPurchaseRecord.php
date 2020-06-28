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
	 * @var number
	 */
	public $price;
	/**
	 * The amount paid for the item.
	 * 
	 * @var number
	 */
	public $amountPaid;
	/**
	 * The discount amount that was applied to the item.
	 * 
	 * @var number
	 */
	public $discount;
	/**
	 * The amount of tax that was applied to the item.
	 * 
	 * @var number
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
	 * @var integer
	 */
	public $quantity;
}
