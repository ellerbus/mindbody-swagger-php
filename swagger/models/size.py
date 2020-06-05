from .base_model import BaseModel


class Size(BaseModel):
	"""
	no description available

	Attributes:

		id
		The ID of the product size.

		name
		The name of the product size.
	"""

	input_map = {
		'Id': 'id',
		'Name': 'name',
		}

	output_map = {
		'id': 'Id',
		'name': 'Name',
		}