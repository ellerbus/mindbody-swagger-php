from .base_model import BaseModel

from .autopay_schedule import AutopaySchedule

class Contract(BaseModel):
	"""
	no description available

	Attributes:

		id
		The contract’s ID at the subscriber’s business.

		name
		The name of the contract.

		description
		A description of the contract.

		assigns_membership_id
		The ID of the membership that was assigned to the client when the
		client signed up for a contract.

		assigns_membership_name
		The name of the membership that was assigned to the client when the
		client signed up for this contract.

		sold_online
		When `true`, indicates that this membership is intended to be shown to
		clients in client experiences.<br />  When `false`, this contract
		should only be shown to staff members.

		contract_items
		Contains information about the items in the contract.

		intro_offer
		Defines whether this contract is treated as an introductory offer. If
		this is an introductory offer, then clients are always charged a set
		number of times rather than month to month, using their AutoPays.
		Possible values are:  * None  * NewConsumer  * NewAndReturningConsumer

		autopay_schedule
		Contains information about the AutoPay schedule. This parameter is
		null if `AutopayTriggerType` has a value of
		`PricingOptionRunsOutOrExpires`.

		number_of_autopays
		The number of times that the AutoPay is to be run. This value is null
		if `FrequencyType` is `MonthToMonth`.

		autopay_trigger_type
		Defines whether the AutoPay, if applicable to this contract, runs on a
		set schedule or when the pricing option runs out or expires. Possible
		values are:  * OnSetSchedule  * PricingOptionRunsOutOrExpires

		action_upon_completion_of_autopays
		The renewal action to be taken when this AutoPay is completed.
		Possible values are:  * ContractExpires  * ContractAutomaticallyRenews

		clients_charged_on
		The value that indicates when clients are charged. Possible values
		are:  * OnSaleDate  * FirstOfTheMonth  * FifteenthOfTheMonth  *
		LastDayOfTheMonth  * FirstOrFifteenthOfTheMonth  *
		FirstOrSixteenthOfTheMonth  * FifteenthOrEndOfTheMonth  * SpecificDate

		clients_charged_on_specific_date
		If `ClientsChargedOn` is defined as a specific date, this property
		holds the value of that date. Otherwise, this property is null.

		discount_amount
		The calculated discount applied to the items in this contract.

		deposit_amount
		The amount of the deposit required for this contract.

		first_autopay_free
		When `true`, indicates that the first payment for the AutoPay is free.

		last_autopay_free
		When `true`, indicates that the last payment for the AutoPay is free.

		client_terminate_online
		When `true`, indicates that the client can terminate this contract on
		the Internet.

		membership_type_restrictions
		Contains information about the memberships that can purchase this
		contract. If null, then no membership restrictions exist, and anyone
		can purchase the contract.

		location_purchase_restriction_ids
		The IDs of the locations where this contract may be sold. If there are
		no restrictions, this value is null.

		location_purchase_restriction_names
		Location names where the contract may be purchased. If this value is
		null, there are no restrictions.

		agreement_terms
		Business-defined terms and conditions for the contract.

		requires_electronic_confirmation
		When `true`, clients who purchase the contract are prompted to agree
		to the terms of the contract the next time that they log in.

		autopay_enabled
		When `true`, this contract establishes an AutoPay on the client’s
		account.

		first_payment_amount_subtotal
		The subtotal of the amount that the client is to be charged when
		signing up for the contract.

		first_payment_amount_tax
		The amount of tax that the client is to be charged when signing up for
		the contract.

		first_payment_amount_total
		The total amount that the client is to be charged when signing up for
		the contract.

		recurring_payment_amount_subtotal
		The subtotal amount that the client is to be charged on an ongoing
		basis.

		recurring_payment_amount_tax
		The amount of tax the client is to be charged on an ongoing basis.

		recurring_payment_amount_total
		The total amount that the client is to be charged on an ongoing basis.

		total_contract_amount_subtotal
		The subtotal amount that the client is to be charged over the lifespan
		of the contract.

		total_contract_amount_tax
		The total amount of tax the client is to be charged over the lifespan
		of the contract.

		total_contract_amount_total
		The total amount the client is to be charged over the lifespan of the
		contract.
	"""

	input_map = {
		'Id': 'id',
		'Name': 'name',
		'Description': 'description',
		'AssignsMembershipId': 'assigns_membership_id',
		'AssignsMembershipName': 'assigns_membership_name',
		'SoldOnline': 'sold_online',
		'ContractItems': 'contract_items',
		'IntroOffer': 'intro_offer',
		'AutopaySchedule': ('autopay_schedule', AutopaySchedule)
		'NumberOfAutopays': 'number_of_autopays',
		'AutopayTriggerType': 'autopay_trigger_type',
		'ActionUponCompletionOfAutopays': 'action_upon_completion_of_autopays',
		'ClientsChargedOn': 'clients_charged_on',
		'ClientsChargedOnSpecificDate': 'clients_charged_on_specific_date',
		'DiscountAmount': 'discount_amount',
		'DepositAmount': 'deposit_amount',
		'FirstAutopayFree': 'first_autopay_free',
		'LastAutopayFree': 'last_autopay_free',
		'ClientTerminateOnline': 'client_terminate_online',
		'MembershipTypeRestrictions': 'membership_type_restrictions',
		'LocationPurchaseRestrictionIds': 'location_purchase_restriction_ids',
		'LocationPurchaseRestrictionNames': 'location_purchase_restriction_names',
		'AgreementTerms': 'agreement_terms',
		'RequiresElectronicConfirmation': 'requires_electronic_confirmation',
		'AutopayEnabled': 'autopay_enabled',
		'FirstPaymentAmountSubtotal': 'first_payment_amount_subtotal',
		'FirstPaymentAmountTax': 'first_payment_amount_tax',
		'FirstPaymentAmountTotal': 'first_payment_amount_total',
		'RecurringPaymentAmountSubtotal': 'recurring_payment_amount_subtotal',
		'RecurringPaymentAmountTax': 'recurring_payment_amount_tax',
		'RecurringPaymentAmountTotal': 'recurring_payment_amount_total',
		'TotalContractAmountSubtotal': 'total_contract_amount_subtotal',
		'TotalContractAmountTax': 'total_contract_amount_tax',
		'TotalContractAmountTotal': 'total_contract_amount_total',
		}

	output_map = {
		'id': 'Id',
		'name': 'Name',
		'description': 'Description',
		'assigns_membership_id': 'AssignsMembershipId',
		'assigns_membership_name': 'AssignsMembershipName',
		'sold_online': 'SoldOnline',
		'contract_items': 'ContractItems',
		'intro_offer': 'IntroOffer',
		'autopay_schedule': 'AutopaySchedule',
		'number_of_autopays': 'NumberOfAutopays',
		'autopay_trigger_type': 'AutopayTriggerType',
		'action_upon_completion_of_autopays': 'ActionUponCompletionOfAutopays',
		'clients_charged_on': 'ClientsChargedOn',
		'clients_charged_on_specific_date': 'ClientsChargedOnSpecificDate',
		'discount_amount': 'DiscountAmount',
		'deposit_amount': 'DepositAmount',
		'first_autopay_free': 'FirstAutopayFree',
		'last_autopay_free': 'LastAutopayFree',
		'client_terminate_online': 'ClientTerminateOnline',
		'membership_type_restrictions': 'MembershipTypeRestrictions',
		'location_purchase_restriction_ids': 'LocationPurchaseRestrictionIds',
		'location_purchase_restriction_names': 'LocationPurchaseRestrictionNames',
		'agreement_terms': 'AgreementTerms',
		'requires_electronic_confirmation': 'RequiresElectronicConfirmation',
		'autopay_enabled': 'AutopayEnabled',
		'first_payment_amount_subtotal': 'FirstPaymentAmountSubtotal',
		'first_payment_amount_tax': 'FirstPaymentAmountTax',
		'first_payment_amount_total': 'FirstPaymentAmountTotal',
		'recurring_payment_amount_subtotal': 'RecurringPaymentAmountSubtotal',
		'recurring_payment_amount_tax': 'RecurringPaymentAmountTax',
		'recurring_payment_amount_total': 'RecurringPaymentAmountTotal',
		'total_contract_amount_subtotal': 'TotalContractAmountSubtotal',
		'total_contract_amount_tax': 'TotalContractAmountTax',
		'total_contract_amount_total': 'TotalContractAmountTotal',
		}