from .base_model import BaseModel


class Level(BaseModel):
	"""
	A session level.

	Attributes:

		id
		The level's ID.

		name
		The level's name.

		description
		The level's description.
	"""

	input_map = {
		'Id': 'id',
		'Name': 'name',
		'Description': 'description',
		}

	output_map = {
		'id': 'Id',
		'name': 'Name',
		'description': 'Description',
		}

	id = None
	name = None
	description = None

