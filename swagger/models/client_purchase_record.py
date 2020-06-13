from .base_model import BaseModel

from .sale import Sale

class ClientPurchaseRecord(BaseModel):
	"""
	A record of a specific client purchase

	Attributes:

		sale
		Contains details about the sale and payment for a purchase event.

		description
		The item name and description.

		account_payment
		If `true`, the item was a payment credited to an account.

		price
		The item's price before taxes and discounts.

		amount_paid
		The amount paid for the item.

		discount
		The discount amount that was applied to the item.

		tax
		The amount of tax that was applied to the item.

		returned
		The return status of the item. If `true`, this item was returned.

		quantity
		The quantity of the item purchased.
	"""

	input_map = {
		'Sale': ('sale', Sale),
		'Description': 'description',
		'AccountPayment': 'account_payment',
		'Price': 'price',
		'AmountPaid': 'amount_paid',
		'Discount': 'discount',
		'Tax': 'tax',
		'Returned': 'returned',
		'Quantity': 'quantity',
		}

	output_map = {
		'sale': 'Sale',
		'description': 'Description',
		'account_payment': 'AccountPayment',
		'price': 'Price',
		'amount_paid': 'AmountPaid',
		'discount': 'Discount',
		'tax': 'Tax',
		'returned': 'Returned',
		'quantity': 'Quantity',
		}