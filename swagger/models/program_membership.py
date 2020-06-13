from .base_model import BaseModel


class ProgramMembership(BaseModel):
	"""
	no description available

	Attributes:

		id
		The service category’s ID.

		name
		The name of this service category.
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

