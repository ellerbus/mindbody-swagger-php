<?php

namespace App\MindBody\Models;

/**
 * no description available
 */
class PurchasedItem extends BaseModel
{
	/**
	 * The ProductID of the item.
	 * 
	 * @var integer
	 */
	public $id;
	/**
	 * When `true`, indicates that the purchased item was a pricing option
	 * for a service.
	 * 
	 * @var boolean
	 */
	public $isService;
	/**
	 * The BarcodeId of the item.  For services, BarcodeId may be null  If no
	 * barcode id is explicitly set by the business it is the internal id in
	 * a string format.
	 * 
	 * @var string
	 */
	public $barcodeId;
}
