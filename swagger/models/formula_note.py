from .base_model import BaseModel


class FormulaNote(BaseModel):
	"""
	A formula note.

	Attributes:

		id
		ID of the formula note.

		client_id
		Client ID of the formula note.

		note
		The text of the formula note.

		entry_date_time
		Date and time that the formula note was entered.

		appointment_id
		The appointment ID associated with the formula note.
	"""

	input_map = {
		'Id': 'id',
		'ClientId': 'client_id',
		'Note': 'note',
		'EntryDateTime': 'entry_date_time',
		'AppointmentId': 'appointment_id',
		}

	output_map = {
		'id': 'Id',
		'client_id': 'ClientId',
		'note': 'Note',
		'entry_date_time': 'EntryDateTime',
		'appointment_id': 'AppointmentId',
		}