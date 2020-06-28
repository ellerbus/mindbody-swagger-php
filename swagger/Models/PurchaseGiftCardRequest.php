<?php

namespace App\MindBody\Models;

/**
 * no description available
 */
class PurchaseGiftCardRequest extends BaseModel
{
	/**
	 * When `true`, allows you to test the request without affecting the
	 * database.<br />  When `false`, the request is carried out and the
	 * database is affected.
	 * 
	 * @var boolean
	 */
	public $test;
	/**
	 * The ID of the location where the gift card is being sold.
	 * 
	 * @var integer
	 */
	public $locationId;
	/**
	 * The ID of the layout used for the gift card’s image.
	 * 
	 * @var integer
	 */
	public $layoutId;
	/**
	 * The RSSID of the client who is purchasing the gift card.
	 * 
	 * @var string
	 */
	public $purchaserClientId;
	/**
	 * The product ID of the gift card being purchased.
	 * 
	 * @var integer
	 */
	public $giftCardId;
	/**
	 * When `true`, indicates that a purchase receipt email should be sent to
	 * the purchasing client, if all settings are correctly configured.<br />
	 * When `false`, no email is sent to the purchaser.
	 * 
	 * @var boolean
	 */
	public $sendEmailReceipt;
	/**
	 * The email address to send the gift card image to. This parameter is
	 * required if the `LayoutId` is not 0.<br />  Maximum length: **100**
	 * 
	 * @var string
	 */
	public $recipientEmail;
	/**
	 * The name of the person who is to receive the gift card. This parameter
	 * is required if the `LayoutId` is not 0.<br />  Maximum length: **20**
	 * 
	 * @var string
	 */
	public $recipientName;
	/**
	 * The text to use as the title of the gift card, for example: Happy
	 * Birthday, Maria! This parameter is required if the `LayoutId` is not
	 * 0.<br />  Maximum length: **20**
	 * 
	 * @var string
	 */
	public $title;
	/**
	 * A personal message to include in the gift card.<br />  Maximum length:
	 * **300**
	 * 
	 * @var string
	 */
	public $giftMessage;
	/**
	 * The date that the gift card’s image is to be delivered to the
	 * recipient. This parameter cannot be set to a date in the past. This
	 * parameter is required if the `LayoutId` is not 0.  Default: **today**
	 * Minimum: **today**
	 * 
	 * @var string
	 */
	public $deliveryDate;
	/**
	 * Contains information about the payment.
	 * 
	 * @var CheckoutPaymentInfo
	 */
	public $paymentInfo;
	/**
	 * The ID of the staff member who is to be marked as the sales rep for
	 * this gift card purchase.
	 * 
	 * @var integer
	 */
	public $salesRepId;
	/**
	 * Constructor
	 */
	public function __construct($locationId, $purchaserClientId, $giftCardId)
	{
		$this->locationId = $locationId;
		$this->purchaserClientId = $purchaserClientId;
		$this->giftCardId = $giftCardId;
	}
}
