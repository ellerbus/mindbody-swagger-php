<?php

namespace App\MindBody\Models;

/**
 * no description available
 */
class GetGiftCardBalanceResponse extends BaseModel
{
	/**
	 * The gift card's barcode ID.
	 * 
	 * @var string 
	 */
	public $barcodeId;
	/**
	 * The gift card's remaining balance.
	 * 
	 * @var number format:double
	 */
	public $remainingBalance;

	protected function getInputMap()
	{
		return [
			'BarcodeId' => ['barcodeId', 'string', null],
			'RemainingBalance' => ['remainingBalance', 'number', 'double'],
			];
	}

	protected function getOutputMap()
	{
		return [
			'barcodeId' => ['BarcodeId', 'string', null],
			'remainingBalance' => ['RemainingBalance', 'number', 'double'],
			];
	}
}
