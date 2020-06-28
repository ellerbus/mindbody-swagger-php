<?php

namespace App\MindBody\Models;

/*
 * no description available
 */
class Contract extends BaseModel
{
	/*
	 * The contract’s ID at the subscriber’s business.
	 * 
	 * @var integer
	 */
	public $id;
	/*
	 * The name of the contract.
	 * 
	 * @var string
	 */
	public $name;
	/*
	 * A description of the contract.
	 * 
	 * @var string
	 */
	public $description;
	/*
	 * The ID of the membership that was assigned to the client when the
	 * client signed up for a contract.
	 * 
	 * @var integer
	 */
	public $assignsMembershipId;
	/*
	 * The name of the membership that was assigned to the client when the
	 * client signed up for this contract.
	 * 
	 * @var string
	 */
	public $assignsMembershipName;
	/*
	 * When `true`, indicates that this membership is intended to be shown to
	 * clients in client experiences.<br />  When `false`, this contract
	 * should only be shown to staff members.
	 * 
	 * @var boolean
	 */
	public $soldOnline;
	/*
	 * Contains information about the items in the contract.
	 * 
	 * @var ContractItem[]
	 */
	public $contractItems;
	/*
	 * Defines whether this contract is treated as an introductory offer. If
	 * this is an introductory offer, then clients are always charged a set
	 * number of times rather than month to month, using their AutoPays.
	 * Possible values are:  * None  * NewConsumer  * NewAndReturningConsumer
	 * 
	 * @var string
	 */
	public $introOffer;
	/*
	 * Contains information about the AutoPay schedule. This parameter is
	 * null if `AutopayTriggerType` has a value of
	 * `PricingOptionRunsOutOrExpires`.
	 * 
	 * @var AutopaySchedule
	 */
	public $autopaySchedule;
	/*
	 * The number of times that the AutoPay is to be run. This value is null
	 * if `FrequencyType` is `MonthToMonth`.
	 * 
	 * @var integer
	 */
	public $numberOfAutopays;
	/*
	 * Defines whether the AutoPay, if applicable to this contract, runs on a
	 * set schedule or when the pricing option runs out or expires. Possible
	 * values are:  * OnSetSchedule  * PricingOptionRunsOutOrExpires
	 * 
	 * @var string
	 */
	public $autopayTriggerType;
	/*
	 * The renewal action to be taken when this AutoPay is completed.
	 * Possible values are:  * ContractExpires  * ContractAutomaticallyRenews
	 * 
	 * @var string
	 */
	public $actionUponCompletionOfAutopays;
	/*
	 * The value that indicates when clients are charged. Possible values
	 * are:  * OnSaleDate  * FirstOfTheMonth  * FifteenthOfTheMonth  *
	 * LastDayOfTheMonth  * FirstOrFifteenthOfTheMonth  *
	 * FirstOrSixteenthOfTheMonth  * FifteenthOrEndOfTheMonth  * SpecificDate
	 * 
	 * @var string
	 */
	public $clientsChargedOn;
	/*
	 * If `ClientsChargedOn` is defined as a specific date, this property
	 * holds the value of that date. Otherwise, this property is null.
	 * 
	 * @var string
	 */
	public $clientsChargedOnSpecificDate;
	/*
	 * The calculated discount applied to the items in this contract.
	 * 
	 * @var number
	 */
	public $discountAmount;
	/*
	 * The amount of the deposit required for this contract.
	 * 
	 * @var number
	 */
	public $depositAmount;
	/*
	 * When `true`, indicates that the first payment for the AutoPay is free.
	 * 
	 * @var boolean
	 */
	public $firstAutopayFree;
	/*
	 * When `true`, indicates that the last payment for the AutoPay is free.
	 * 
	 * @var boolean
	 */
	public $lastAutopayFree;
	/*
	 * When `true`, indicates that the client can terminate this contract on
	 * the Internet.
	 * 
	 * @var boolean
	 */
	public $clientTerminateOnline;
	/*
	 * Contains information about the memberships that can purchase this
	 * contract. If null, then no membership restrictions exist, and anyone
	 * can purchase the contract.
	 * 
	 * @var MembershipTypeRestriction[]
	 */
	public $membershipTypeRestrictions;
	/*
	 * The IDs of the locations where this contract may be sold. If there are
	 * no restrictions, this value is null.
	 * 
	 * @var integer[]
	 */
	public $locationPurchaseRestrictionIds;
	/*
	 * Location names where the contract may be purchased. If this value is
	 * null, there are no restrictions.
	 * 
	 * @var string[]
	 */
	public $locationPurchaseRestrictionNames;
	/*
	 * Business-defined terms and conditions for the contract.
	 * 
	 * @var string
	 */
	public $agreementTerms;
	/*
	 * When `true`, clients who purchase the contract are prompted to agree
	 * to the terms of the contract the next time that they log in.
	 * 
	 * @var boolean
	 */
	public $requiresElectronicConfirmation;
	/*
	 * When `true`, this contract establishes an AutoPay on the client’s
	 * account.
	 * 
	 * @var boolean
	 */
	public $autopayEnabled;
	/*
	 * The subtotal of the amount that the client is to be charged when
	 * signing up for the contract.
	 * 
	 * @var number
	 */
	public $firstPaymentAmountSubtotal;
	/*
	 * The amount of tax that the client is to be charged when signing up for
	 * the contract.
	 * 
	 * @var number
	 */
	public $firstPaymentAmountTax;
	/*
	 * The total amount that the client is to be charged when signing up for
	 * the contract.
	 * 
	 * @var number
	 */
	public $firstPaymentAmountTotal;
	/*
	 * The subtotal amount that the client is to be charged on an ongoing
	 * basis.
	 * 
	 * @var number
	 */
	public $recurringPaymentAmountSubtotal;
	/*
	 * The amount of tax the client is to be charged on an ongoing basis.
	 * 
	 * @var number
	 */
	public $recurringPaymentAmountTax;
	/*
	 * The total amount that the client is to be charged on an ongoing basis.
	 * 
	 * @var number
	 */
	public $recurringPaymentAmountTotal;
	/*
	 * The subtotal amount that the client is to be charged over the lifespan
	 * of the contract.
	 * 
	 * @var number
	 */
	public $totalContractAmountSubtotal;
	/*
	 * The total amount of tax the client is to be charged over the lifespan
	 * of the contract.
	 * 
	 * @var number
	 */
	public $totalContractAmountTax;
	/*
	 * The total amount the client is to be charged over the lifespan of the
	 * contract.
	 * 
	 * @var number
	 */
	public $totalContractAmountTotal;
}