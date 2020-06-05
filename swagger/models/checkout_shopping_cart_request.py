from .base_model import BaseModel


class CheckoutShoppingCartRequest(BaseModel):
	"""
	no description available

	Attributes:

		cart_id
		The unique ID of the shopping cart to be processed. You can use this
		value to maintain a persistent cart. If you do not specify a cart ID,
		the MINDBODY software generates one.

		client_id
		The RSSID of the client making the purchase. A cart can be validated
		without a client ID, but a client ID must be specified to complete a
		sale.

		test
		When `true`, indicates that the contents of the cart are validated,
		but the transaction does not take place. You should use this parameter
		during testing and when checking the calculated totals of the items in
		the cart.<br />  When `false`, the transaction takes place and the
		database is affected.<br />  Default: **false**

		items
		A list of the items in the cart.

		in_store
		When `true`, indicates that the cart is to be completed by a staff
		member and is to take place at one of the business’ physical
		locations.<br />  When `false`, indicates that the cart is to be
		completed by a client from the business’ online store.<br />
		Default: **false**

		promotion_code
		Promotion code to be applied to the cart.

		payments
		A list of payment information objects to be applied to payment against
		the items in the cart.

		send_email
		When `true`, sends a purchase receipt email to the client. Note that
		all appropriate permissions and settings must be enabled for the
		client to receive an email.<br />  Default: **false**

		location_id
		The location ID to be used for pulling business mode prices and taxes.
		If no location ID is supplied, it defaults to the online store,
		represented by a null value.   Default: **null** (the online store)

		image
		The byte array data of the signature image.

		image_file_name
		The name of the signature image being uploaded.
	"""

	input_map = {
		'CartId': 'cart_id',
		'ClientId': 'client_id',
		'Test': 'test',
		'Items': 'items',
		'InStore': 'in_store',
		'PromotionCode': 'promotion_code',
		'Payments': 'payments',
		'SendEmail': 'send_email',
		'LocationId': 'location_id',
		'Image': 'image',
		'ImageFileName': 'image_file_name',
		}

	output_map = {
		'cart_id': 'CartId',
		'client_id': 'ClientId',
		'test': 'Test',
		'items': 'Items',
		'in_store': 'InStore',
		'promotion_code': 'PromotionCode',
		'payments': 'Payments',
		'send_email': 'SendEmail',
		'location_id': 'LocationId',
		'image': 'Image',
		'image_file_name': 'ImageFileName',
		}	def __init__(self, client_id, items, payments):
		self.client_id = client_id
		self.items = items
		self.payments = payments
