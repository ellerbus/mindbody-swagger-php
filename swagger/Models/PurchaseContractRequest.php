<?php

namespace App\MindBody\Models;

/*
 * no description available
 */
class PurchaseContractRequest extends BaseModel
{
	/*
	 * When `true`, the Public API validates input information, but does not
	 * commit it, so no client data is affected.<br />  When `false` or
	 * omitted, the transaction is committed, and client data is affected.<br
	 * />  Default: **false**
	 * 
	 * @var boolean
	 */
	public $test;
	/*
	 * The ID of the location where the client is purchasing the contract;
	 * used for AutoPays.
	 * 
	 * @var integer
	 */
	public $locationId;
	/*
	 * The ID of the client. Note that this is not the same as the client’s
	 * unique ID.
	 * 
	 * @var string
	 */
	public $clientId;
	/*
	 * The ID of the contract being purchased.
	 * 
	 * @var integer
	 */
	public $contractId;
	/*
	 * The date that the contract starts.<br />  Default: **today’s date**
	 * 
	 * @var string
	 */
	public $startDate;
	/*
	 * The date on which the first payment is to occur. Possible values:  *
	 * Instant  * `StartDate`
	 * 
	 * @var string
	 */
	public $firstPaymentOccurs;
	/*
	 * A representation of the client’s signature. This value can take the
	 * form of Base64-encoded byte array. The file type should be PNG. The
	 * picture of the client’s signature is uploaded and viewable from the
	 * Client Documents page in the Core Business Mode software. The title of
	 * the document is:<br />  clientContractSignature-{uniquePurchasedClient
	 * ContractID}-{contractName}-{contractStartDate}.{fileType}
	 * 
	 * @var string
	 */
	public $clientSignature;
	/*
	 * A promotion code, if one applies. Promotion codes are applied to items
	 * that are both marked as pay now in a contract and are discounted by
	 * the promotion code. If a pay now item is an autopay item, its autopay
	 * price is the price at the time of checkout, so, if a promotion code
	 * was applied, all autopays are scheduled using that discounted price.
	 * 
	 * @var string
	 */
	public $promotionCode;
	/*
	 * Contains credit card payment information.<br />  This is only required
	 * if `StoredCardInfo` is not passed and `UseDirectDebit` is `false`.
	 * 
	 * @var CreditCardInfo
	 */
	public $creditCardInfo;
	/*
	 * Contains information about the stored credit card payment.<br />  This
	 * is only required if `CreditCardInfo` is not passed and
	 * `UseDirectDebit` is `false`.
	 * 
	 * @var StoredCardInfo
	 */
	public $storedCardInfo;
	/*
	 * When `true`, indicates that email and SMS notifications should be sent
	 * to the client after purchase.<br />  Default: **true**
	 * 
	 * @var boolean
	 */
	public $sendNotifications;
	/*
	 * The ID of the staff member who is to be marked as the sales rep for
	 * this contract purchase.
	 * 
	 * @var integer
	 */
	public $salesRepId;
	/*
	 * When `true`, indicates that the direct debit information stored on the
	 * client's account is to be used to pay for the contract.<br />  This is
	 * only required if both `CreditCardInfo` and `StoredCardInfo` are not
	 * passed.<br />  Default: **false**
	 * 
	 * @var boolean
	 */
	public $useDirectDebit;
	/*
	 *
	 */
	public function __construct($clientId, $contractId)
	{
		$this->clientId = $clientId;
		$this->contractId = $contractId;
	}
}
