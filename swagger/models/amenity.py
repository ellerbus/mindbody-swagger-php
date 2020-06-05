from .base_model import BaseModel


class Amenity(BaseModel):
	"""
	Definition of a location amenity

	Attributes:

		id
		The ID number of the amenity.

		name
		The name of the amenity, for example, food or lockers.
	"""

	input_map = {
		'Id': 'id',
		'Name': 'name',
		}

	output_map = {
		'id': 'Id',
		'name': 'Name',
		}