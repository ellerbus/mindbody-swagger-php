from .base_model import BaseModel

from .checkout_payment_info import CheckoutPaymentInfo

class PurchaseGiftCardRequest(BaseModel):
	"""
	no description available

	Attributes:

		test
		When `true`, allows you to test the request without affecting the
		database.<br />  When `false`, the request is carried out and the
		database is affected.

		location_id
		The ID of the location where the gift card is being sold.

		layout_id
		The ID of the layout used for the gift card’s image.

		purchaser_client_id
		The RSSID of the client who is purchasing the gift card.

		gift_card_id
		The product ID of the gift card being purchased.

		send_email_receipt
		When `true`, indicates that a purchase receipt email should be sent to
		the purchasing client, if all settings are correctly configured.<br />
		When `false`, no email is sent to the purchaser.

		recipient_email
		The email address to send the gift card image to. This parameter is
		required if the `LayoutId` is not 0.<br />  Maximum length: **100**

		recipient_name
		The name of the person who is to receive the gift card. This parameter
		is required if the `LayoutId` is not 0.<br />  Maximum length: **20**

		title
		The text to use as the title of the gift card, for example: Happy
		Birthday, Maria! This parameter is required if the `LayoutId` is not
		0.<br />  Maximum length: **20**

		gift_message
		A personal message to include in the gift card.<br />  Maximum length:
		**300**

		delivery_date
		The date that the gift card’s image is to be delivered to the
		recipient. This parameter cannot be set to a date in the past. This
		parameter is required if the `LayoutId` is not 0.  Default: **today**
		Minimum: **today**

		payment_info
		Contains information about the payment.

		sales_rep_id
		The ID of the staff member who is to be marked as the sales rep for
		this gift card purchase.
	"""

	input_map = {
		'Test': 'test',
		'LocationId': 'location_id',
		'LayoutId': 'layout_id',
		'PurchaserClientId': 'purchaser_client_id',
		'GiftCardId': 'gift_card_id',
		'SendEmailReceipt': 'send_email_receipt',
		'RecipientEmail': 'recipient_email',
		'RecipientName': 'recipient_name',
		'Title': 'title',
		'GiftMessage': 'gift_message',
		'DeliveryDate': 'delivery_date',
		'PaymentInfo': ('payment_info', PaymentInfo)
		'SalesRepId': 'sales_rep_id',
		}

	output_map = {
		'test': 'Test',
		'location_id': 'LocationId',
		'layout_id': 'LayoutId',
		'purchaser_client_id': 'PurchaserClientId',
		'gift_card_id': 'GiftCardId',
		'send_email_receipt': 'SendEmailReceipt',
		'recipient_email': 'RecipientEmail',
		'recipient_name': 'RecipientName',
		'title': 'Title',
		'gift_message': 'GiftMessage',
		'delivery_date': 'DeliveryDate',
		'payment_info': 'PaymentInfo',
		'sales_rep_id': 'SalesRepId',
		}	def __init__(self, location_id, purchaser_client_id, gift_card_id):
		self.location_id = location_id
		self.purchaser_client_id = purchaser_client_id
		self.gift_card_id = gift_card_id
