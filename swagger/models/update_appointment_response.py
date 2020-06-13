from .base_model import BaseModel

from .appointment import Appointment

class UpdateAppointmentResponse(BaseModel):
	"""
	no description available

	Attributes:

		appointment
		Contains information about the appointment.
	"""

	input_map = {
		'Appointment': ('appointment', Appointment),
		}

	output_map = {
		'appointment': 'Appointment',
		}

		'Appointment': ('appointment', Appointment),

