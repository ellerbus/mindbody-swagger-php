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
	 * @var number format:double
	 */
	public $value;
	/**
	 * The amount paid for the gift card by the purchaser.
	 * 
	 * @var number format:double
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
	 * @var integer format:int32
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
	 * @var integer format:int64
	 */
	public $saleId;

	protected function getInputMap()
	{
		return [
			'BarcodeId' => ['barcodeId', 'string', null],
			'Value' => ['value', 'number', 'double'],
			'AmountPaid' => ['amountPaid', 'number', 'double'],
			'FromName' => ['fromName', 'string', null],
			'LayoutId' => ['layoutId', 'integer', 'int32'],
			'EmailReceipt' => ['emailReceipt', 'boolean', null],
			'PurchaserClientId' => ['purchaserClientId', 'string', null],
			'PurchaserEmail' => ['purchaserEmail', 'string', null],
			'RecipientEmail' => ['recipientEmail', 'string', null],
			'SaleId' => ['saleId', 'integer', 'int64'],
			];
	}

	protected function getOutputMap()
	{
		return [
			'barcodeId' => ['BarcodeId', 'string', null],
			'value' => ['Value', 'number', 'double'],
			'amountPaid' => ['AmountPaid', 'number', 'double'],
			'fromName' => ['FromName', 'string', null],
			'layoutId' => ['LayoutId', 'integer', 'int32'],
			'emailReceipt' => ['EmailReceipt', 'boolean', null],
			'purchaserClientId' => ['PurchaserClientId', 'string', null],
			'purchaserEmail' => ['PurchaserEmail', 'string', null],
			'recipientEmail' => ['RecipientEmail', 'string', null],
			'saleId' => ['SaleId', 'integer', 'int64'],
			];
	}
}
