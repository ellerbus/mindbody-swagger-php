from .base_model import BaseModel


class AssignedClientIndex(BaseModel):
	"""
	Represents a client index value assigned to a client

	Attributes:

		id
		The index ID assigned to the client.

		value_id
		The index’s value ID.
	"""

	input_map = {
		'Id': 'id',
		'ValueId': 'value_id',
		}

	output_map = {
		'id': 'Id',
		'value_id': 'ValueId',
		}

	id = None
	value_id = None

