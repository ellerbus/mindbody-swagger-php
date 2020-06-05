from .base_model import BaseModel


class GetAppointmentOptionsResponse(BaseModel):
	"""
	no description available

	Attributes:

		options
		Contains information about the appointment options.
	"""

	input_map = {
		'Options': 'options',
		}

	output_map = {
		'options': 'Options',
		}