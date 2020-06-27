<?php

namespace App\MindBody\Models;

/*
 * no description available
 */
class GetGiftCardBalanceResponse extends BaseModel
{
	/*
	 * The gift card's barcode ID.
	 * 
	 * @var string
	 */
	public $barcodeId;
	/*
	 * The gift card's remaining balance.
	 * 
	 * @var number
	 */
	public $remainingBalance;
}
