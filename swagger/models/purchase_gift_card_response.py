from .base_model import BaseModel


class PurchaseGiftCardResponse(BaseModel):
	"""
	no description available

	Attributes:

		barcode_id
		The barcode ID assigned to the purchased gift card.

		value
		The monetary value of the gift card.

		amount_paid
		The amount paid for the gift card by the purchaser.

		from_name
		The name of the purchaser.

		layout_id
		The ID of the layout used for this gift card.

		email_receipt
		Whether or not an email receipt was sent to the purchaser. If true, a
		receipt was sent.

		purchaser_client_id
		The client ID of the purchaser.

		purchaser_email
		The purchaser’s email address.

		recipient_email
		The recipient’s email address.

		sale_id
		The sale ID of the gift card.
	"""

	input_map = {
		'BarcodeId': 'barcode_id',
		'Value': 'value',
		'AmountPaid': 'amount_paid',
		'FromName': 'from_name',
		'LayoutId': 'layout_id',
		'EmailReceipt': 'email_receipt',
		'PurchaserClientId': 'purchaser_client_id',
		'PurchaserEmail': 'purchaser_email',
		'RecipientEmail': 'recipient_email',
		'SaleId': 'sale_id',
		}

	output_map = {
		'barcode_id': 'BarcodeId',
		'value': 'Value',
		'amount_paid': 'AmountPaid',
		'from_name': 'FromName',
		'layout_id': 'LayoutId',
		'email_receipt': 'EmailReceipt',
		'purchaser_client_id': 'PurchaserClientId',
		'purchaser_email': 'PurchaserEmail',
		'recipient_email': 'RecipientEmail',
		'sale_id': 'SaleId',
		}