from .base_model import BaseModel


class ContactLogSubType(BaseModel):
	"""
	A contact log subtype.

	Attributes:

		id
		The contact log subtype’s ID.
	"""

	input_map = {
		'Id': 'id',
		}

	output_map = {
		'id': 'Id',
		}

	id = None

