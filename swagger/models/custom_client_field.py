from .base_model import BaseModel


class CustomClientField(BaseModel):
	"""
	A custom client field

	Attributes:

		id
		The ID of the custom client field.

		data_type
		The data type of the field.

		name
		The name of the field.
	"""

	input_map = {
		'Id': 'id',
		'DataType': 'data_type',
		'Name': 'name',
		}

	output_map = {
		'id': 'Id',
		'data_type': 'DataType',
		'name': 'Name',
		}

	id = None
	data_type = None
	name = None

