from .base_model import BaseModel


class Resource(BaseModel):
	"""
	Contains information about resources, such as rooms.

	Attributes:

		id
		The ID of the resource.

		name
		The name of the resource.
	"""

	input_map = {
		'Id': 'id',
		'Name': 'name',
		}

	output_map = {
		'id': 'Id',
		'name': 'Name',
		}