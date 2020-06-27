<?php

namespace App\MindBody\Models;

/*
 * no description available
 */
class Sale extends BaseModel
{
	/*
	 * The sale ID.
	 * 
	 * @var integer
	 */
	public $id;
	/*
	 * The date the item was sold.
	 * 
	 * @var string
	 */
	public $saleDate;
	/*
	 * The time the item was sold.
	 * 
	 * @var string
	 */
	public $saleTime;
	/*
	 * The date and time the item was sold.
	 * 
	 * @var string
	 */
	public $saleDateTime;
	/*
	 * The ID of the client who made the purchase.
	 * 
	 * @var string
	 */
	public $clientId;
	/*
	 * Contains information that describes the purchased items.
	 * 
	 * @var PurchasedItem[]
	 */
	public $purchasedItems;
	/*
	 * The ID of the location where the sale takes place.
	 * 
	 * @var integer
	 */
	public $locationId;
	/*
	 * Contains information that describes the payments that contributed to
	 * this sale.
	 * 
	 * @var SalePayment[]
	 */
	public $payments;
}
