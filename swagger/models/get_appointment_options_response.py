from .base_model import BaseModel

from .appointment_option import AppointmentOption

class GetAppointmentOptionsResponse(BaseModel):
	"""
	no description available

	Attributes:

		options
		Contains information about the appointment options.
	"""

	input_map = {
		'Options': ['options', AppointmentOption],
		}

	output_map = {
		'options': 'Options',
		}

	options = None

