from .base_model import BaseModel

from .credit_card_info import CreditCardInfo
from .stored_card_info import StoredCardInfo

class PurchaseContractRequest(BaseModel):
	"""
	no description available

	Attributes:

		test
		When `true`, the Public API validates input information, but does not
		commit it, so no client data is affected.<br />  When `false` or
		omitted, the transaction is committed, and client data is affected.<br
		/>  Default: **false**

		location_id
		The ID of the location where the client is purchasing the contract;
		used for AutoPays.

		client_id
		The ID of the client. Note that this is not the same as the client’s
		unique ID.

		contract_id
		The ID of the contract being purchased.

		start_date
		The date that the contract starts.<br />  Default: **today’s date**

		first_payment_occurs
		The date on which the first payment is to occur. Possible values:  *
		Instant  * `StartDate`

		client_signature
		A representation of the client’s signature. This value can take the
		form of Base64-encoded byte array. The file type should be PNG. The
		picture of the client’s signature is uploaded and viewable from the
		Client Documents page in the Core Business Mode software. The title of
		the document is:<br />  clientContractSignature-{uniquePurchasedClient
		ContractID}-{contractName}-{contractStartDate}.{fileType}

		promotion_code
		A promotion code, if one applies. Promotion codes are applied to items
		that are both marked as pay now in a contract and are discounted by
		the promotion code. If a pay now item is an autopay item, its autopay
		price is the price at the time of checkout, so, if a promotion code
		was applied, all autopays are scheduled using that discounted price.

		credit_card_info
		Contains credit card payment information.<br />  This is only required
		if `StoredCardInfo` is not passed and `UseDirectDebit` is `false`.

		stored_card_info
		Contains information about the stored credit card payment.<br />  This
		is only required if `CreditCardInfo` is not passed and
		`UseDirectDebit` is `false`.

		send_notifications
		When `true`, indicates that email and SMS notifications should be sent
		to the client after purchase.<br />  Default: **true**

		sales_rep_id
		The ID of the staff member who is to be marked as the sales rep for
		this contract purchase.

		use_direct_debit
		When `true`, indicates that the direct debit information stored on the
		client's account is to be used to pay for the contract.<br />  This is
		only required if both `CreditCardInfo` and `StoredCardInfo` are not
		passed.<br />  Default: **false**
	"""

	input_map = {
		'Test': 'test',
		'LocationId': 'location_id',
		'ClientId': 'client_id',
		'ContractId': 'contract_id',
		'StartDate': 'start_date',
		'FirstPaymentOccurs': 'first_payment_occurs',
		'ClientSignature': 'client_signature',
		'PromotionCode': 'promotion_code',
		'CreditCardInfo': ('credit_card_info', CreditCardInfo)
		'StoredCardInfo': ('stored_card_info', StoredCardInfo)
		'SendNotifications': 'send_notifications',
		'SalesRepId': 'sales_rep_id',
		'UseDirectDebit': 'use_direct_debit',
		}

	output_map = {
		'test': 'Test',
		'location_id': 'LocationId',
		'client_id': 'ClientId',
		'contract_id': 'ContractId',
		'start_date': 'StartDate',
		'first_payment_occurs': 'FirstPaymentOccurs',
		'client_signature': 'ClientSignature',
		'promotion_code': 'PromotionCode',
		'credit_card_info': 'CreditCardInfo',
		'stored_card_info': 'StoredCardInfo',
		'send_notifications': 'SendNotifications',
		'sales_rep_id': 'SalesRepId',
		'use_direct_debit': 'UseDirectDebit',
		}	def __init__(self, client_id, contract_id):
		self.client_id = client_id
		self.contract_id = contract_id