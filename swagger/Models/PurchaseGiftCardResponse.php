<?php

namespace App\MindBody\Models;

/**
 * no description available
 */
class PurchaseGiftCardResponse extends BaseModel
{
	/**
	 * The barcode ID assigned to the purchased gift card.
	 * 
	 * @var string
	 */
	public $barcodeId;
	/**
	 * The monetary value of the gift card.
	 * 
	 * @var number
	 */
	public $value;
	/**
	 * The amount paid for the gift card by the purchaser.
	 * 
	 * @var number
	 */
	public $amountPaid;
	/**
	 * The name of the purchaser.
	 * 
	 * @var string
	 */
	public $fromName;
	/**
	 * The ID of the layout used for this gift card.
	 * 
	 * @var integer
	 */
	public $layoutId;
	/**
	 * Whether or not an email receipt was sent to the purchaser. If true, a
	 * receipt was sent.
	 * 
	 * @var boolean
	 */
	public $emailReceipt;
	/**
	 * The client ID of the purchaser.
	 * 
	 * @var string
	 */
	public $purchaserClientId;
	/**
	 * The purchaser’s email address.
	 * 
	 * @var string
	 */
	public $purchaserEmail;
	/**
	 * The recipient’s email address.
	 * 
	 * @var string
	 */
	public $recipientEmail;
	/**
	 * The sale ID of the gift card.
	 * 
	 * @var integer
	 */
	public $saleId;

	protected function getInputMap()
	{
		return [
			'BarcodeId' => 'barcodeId',
			'Value' => 'value',
			'AmountPaid' => 'amountPaid',
			'FromName' => 'fromName',
			'LayoutId' => 'layoutId',
			'EmailReceipt' => 'emailReceipt',
			'PurchaserClientId' => 'purchaserClientId',
			'PurchaserEmail' => 'purchaserEmail',
			'RecipientEmail' => 'recipientEmail',
			'SaleId' => 'saleId',
			];
	}

	protected function getOutputMap()
	{
		return [
			'barcodeId' => 'BarcodeId',
			'value' => 'Value',
			'amountPaid' => 'AmountPaid',
			'fromName' => 'FromName',
			'layoutId' => 'LayoutId',
			'emailReceipt' => 'EmailReceipt',
			'purchaserClientId' => 'PurchaserClientId',
			'purchaserEmail' => 'PurchaserEmail',
			'recipientEmail' => 'RecipientEmail',
			'saleId' => 'SaleId',
			];
	}
}
