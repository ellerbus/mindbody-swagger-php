from .base_model import BaseModel


class Color(BaseModel):
	"""
	A color used by products.

	Attributes:

		id
		The ID of the product color.

		name
		The name of the product color.
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

