from .base_model import BaseModel


class Unavailability(BaseModel):
	"""
	no description available

	Attributes:

		id
		The ID of the unavailability.

		start_date_time
		The date and time the unavailability starts.

		end_date_time
		The date and time the unavailability ends.

		description
		A description of the unavailability.
	"""

	input_map = {
		'Id': 'id',
		'StartDateTime': 'start_date_time',
		'EndDateTime': 'end_date_time',
		'Description': 'description',
		}

	output_map = {
		'id': 'Id',
		'start_date_time': 'StartDateTime',
		'end_date_time': 'EndDateTime',
		'description': 'Description',
		}

	id = None
	start_date_time = None
	end_date_time = None
	description = None

