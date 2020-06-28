<?php

namespace App\MindBody\Models;

/**
 * no description available
 */
class Sale extends BaseModel
{
	/**
	 * The sale ID.
	 * 
	 * @var integer format:int64
	 */
	public $id;
	/**
	 * The date the item was sold.
	 * 
	 * @var string format:date-time
	 */
	public $saleDate;
	/**
	 * The time the item was sold.
	 * 
	 * @var string 
	 */
	public $saleTime;
	/**
	 * The date and time the item was sold.
	 * 
	 * @var string format:date-time
	 */
	public $saleDateTime;
	/**
	 * The ID of the client who made the purchase.
	 * 
	 * @var string 
	 */
	public $clientId;
	/**
	 * Contains information that describes the purchased items.
	 * 
	 * @var PurchasedItem[] 
	 */
	public $purchasedItems;
	/**
	 * The ID of the location where the sale takes place.
	 * 
	 * @var integer format:int32
	 */
	public $locationId;
	/**
	 * Contains information that describes the payments that contributed to
	 * this sale.
	 * 
	 * @var SalePayment[] 
	 */
	public $payments;

	protected function getInputMap()
	{
		return [
			'Id' => ['id', 'integer', 'int64'],
			'SaleDate' => ['saleDate', 'string', 'date-time'],
			'SaleTime' => ['saleTime', 'string', null],
			'SaleDateTime' => ['saleDateTime', 'string', 'date-time'],
			'ClientId' => ['clientId', 'string', null],
			'PurchasedItems' => ['purchasedItems', 'array', PurchasedItem::class],
			'LocationId' => ['locationId', 'integer', 'int32'],
			'Payments' => ['payments', 'array', SalePayment::class],
			];
	}

	protected function getOutputMap()
	{
		return [
			'id' => ['Id', 'integer', 'int64'],
			'saleDate' => ['SaleDate', 'string', 'date-time'],
			'saleTime' => ['SaleTime', 'string', null],
			'saleDateTime' => ['SaleDateTime', 'string', 'date-time'],
			'clientId' => ['ClientId', 'string', null],
			'purchasedItems' => ['PurchasedItems', 'array', PurchasedItem::class],
			'locationId' => ['LocationId', 'integer', 'int32'],
			'payments' => ['Payments', 'array', SalePayment::class],
			];
	}
}
