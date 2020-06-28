<?php

namespace App\MindBody\Models;

/**
 * no description available
 */
class CheckoutShoppingCartRequest extends BaseModel
{
	/**
	 * The unique ID of the shopping cart to be processed. You can use this
	 * value to maintain a persistent cart. If you do not specify a cart ID,
	 * the MINDBODY software generates one.
	 * 
	 * @var string
	 */
	public $cartId;
	/**
	 * The RSSID of the client making the purchase. A cart can be validated
	 * without a client ID, but a client ID must be specified to complete a
	 * sale.
	 * 
	 * @var string
	 */
	public $clientId;
	/**
	 * When `true`, indicates that the contents of the cart are validated,
	 * but the transaction does not take place. You should use this parameter
	 * during testing and when checking the calculated totals of the items in
	 * the cart.<br />  When `false`, the transaction takes place and the
	 * database is affected.<br />  Default: **false**
	 * 
	 * @var boolean
	 */
	public $test;
	/**
	 * A list of the items in the cart.
	 * 
	 * @var CheckoutItemWrapper[]
	 */
	public $items;
	/**
	 * When `true`, indicates that the cart is to be completed by a staff
	 * member and is to take place at one of the business’ physical
	 * locations.<br />  When `false`, indicates that the cart is to be
	 * completed by a client from the business’ online store.<br />
	 * Default: **false**
	 * 
	 * @var boolean
	 */
	public $inStore;
	/**
	 * Promotion code to be applied to the cart.
	 * 
	 * @var string
	 */
	public $promotionCode;
	/**
	 * A list of payment information objects to be applied to payment against
	 * the items in the cart.
	 * 
	 * @var CheckoutPaymentInfo[]
	 */
	public $payments;
	/**
	 * When `true`, sends a purchase receipt email to the client. Note that
	 * all appropriate permissions and settings must be enabled for the
	 * client to receive an email.<br />  Default: **false**
	 * 
	 * @var boolean
	 */
	public $sendEmail;
	/**
	 * The location ID to be used for pulling business mode prices and taxes.
	 * If no location ID is supplied, it defaults to the online store,
	 * represented by a null value.   Default: **null** (the online store)
	 * 
	 * @var integer
	 */
	public $locationId;
	/**
	 * The byte array data of the signature image.
	 * 
	 * @var string
	 */
	public $image;
	/**
	 * The name of the signature image being uploaded.
	 * 
	 * @var string
	 */
	public $imageFileName;
	/**
	 * Constructor
	 */
	public function __construct($clientId, $items, $payments)
	{
		$this->clientId = $clientId;
		$this->items = $items;
		$this->payments = $payments;
	}
}
