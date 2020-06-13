from .base_model import BaseModel


class ClientIndexValue(BaseModel):
	"""
	A client index value.

	Attributes:

		active
		When `true`, indicates that the index value can be assigned to its
		parent index.<br />  When `false`, indicates that the index value has
		been deactivated and cannot be assigned to its parent index.

		id
		The index value’s ID.

		name
		The name of the client index value.
	"""

	input_map = {
		'Active': 'active',
		'Id': 'id',
		'Name': 'name',
		}

	output_map = {
		'active': 'Active',
		'id': 'Id',
		'name': 'Name',
		}

	active = None
	id = None
	name = None

