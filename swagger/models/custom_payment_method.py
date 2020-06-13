from .base_model import BaseModel


class CustomPaymentMethod(BaseModel):
	"""
	no description available

	Attributes:

		id
		The ID of the custom payment method.

		name
		The name of the custom payment method.
	"""

	input_map = {
		'Id': 'id',
		'Name': 'name',
		}

	output_map = {
		'id': 'Id',
		'name': 'Name',
		}

	id = None
	name = None

