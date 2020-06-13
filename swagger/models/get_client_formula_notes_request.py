from .base_model import BaseModel


class GetClientFormulaNotesRequest(BaseModel):
	"""
	no description available

	Attributes:

		client_id
		The client ID of the client whose formula notes are being requested.

		appointment_id
		The appointment ID of the appointment that the formula notes are
		related to.

		limit
		Number of results to include, defaults to 100

		offset
		Page offset, defaults to 0.
	"""

	input_map = {
		'ClientId': 'client_id',
		'AppointmentId': 'appointment_id',
		'Limit': 'limit',
		'Offset': 'offset',
		}

	output_map = {
		'client_id': 'ClientId',
		'appointment_id': 'AppointmentId',
		'limit': 'Limit',
		'offset': 'Offset',
		}

	client_id = None
	appointment_id = None
	limit = None
	offset = None

