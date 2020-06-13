from .base_model import BaseModel


class SalePayment(BaseModel):
	"""
	no description available

	Attributes:

		id
		A unique identifier for this payment.

		amount
		The amount of this payment.

		method
		The method for this payment.

		type
		The type of payment.

		notes
		Notes about this payment.
	"""

	input_map = {
		'Id': 'id',
		'Amount': 'amount',
		'Method': 'method',
		'Type': 'type',
		'Notes': 'notes',
		}

	output_map = {
		'id': 'Id',
		'amount': 'Amount',
		'method': 'Method',
		'type': 'Type',
		'notes': 'Notes',
		}

	id = None
	amount = None
	method = None
	type = None
	notes = None

