from .base_model import BaseModel


class CustomClientFieldValue(BaseModel):
	"""
	The value of a custom client field

	Attributes:

		value
		The value of a specific custom field for a client.

		id
		The ID of the custom client field.

		data_type
		The data type of the field.

		name
		The name of the field.
	"""

	input_map = {
		'Value': 'value',
		'Id': 'id',
		'DataType': 'data_type',
		'Name': 'name',
		}

	output_map = {
		'value': 'Value',
		'id': 'Id',
		'data_type': 'DataType',
		'name': 'Name',
		}

	value = None
	id = None
	data_type = None
	name = None

