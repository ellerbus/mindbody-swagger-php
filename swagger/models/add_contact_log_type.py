from .base_model import BaseModel


class AddContactLogType(BaseModel):
	"""
	Defines what sort of subtypes we want to add to this contact log type

	Attributes:

		id
		The contact log type’s ID.

		sub_types
		A list of the subtype IDs used to tag this contact log type.
	"""

	input_map = {
		'Id': 'id',
		'SubTypes': 'sub_types',
		}

	output_map = {
		'id': 'Id',
		'sub_types': 'SubTypes',
		}