from .base_model import BaseModel


class UpdateContactLogType(BaseModel):
	"""
	no description available

	Attributes:

		id
		The ID of the contact log type to update the subtypes of.

		sub_types
		The subtype IDs that are to be added to the contact log.
	"""

	input_map = {
		'Id': 'id',
		'SubTypes': 'sub_types',
		}

	output_map = {
		'id': 'Id',
		'sub_types': 'SubTypes',
		}