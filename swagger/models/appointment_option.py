from .base_model import BaseModel


class AppointmentOption(BaseModel):
	"""
	An appointment option name/value pair

	Attributes:

		display_name
		The name displayed for this appointment option.

		name
		The name given to this option.

		value
		The value of the option.

		type
		The data type of the option value.
	"""

	input_map = {
		'DisplayName': 'display_name',
		'Name': 'name',
		'Value': 'value',
		'Type': 'type',
		}

	output_map = {
		'display_name': 'DisplayName',
		'name': 'Name',
		'value': 'Value',
		'type': 'Type',
		}