from .base_model import BaseModel


class UpdateAppointmentRequest(BaseModel):
	"""
	no description available

	Attributes:

		appointment_id
		The appointments unique ID.

		end_date_time
		The end date and time of the new appointment.   <br />Default:
		**StartDateTime**, offset by the staff member’s default appointment
		duration.

		execute
		The action taken to add this appointment.

		gender_preference
		The client’s service provider gender preference.

		notes
		Any general notes about this appointment.

		provider_id
		If a user has Complementary and Alternative Medicine features enabled,
		this parameter assigns a provider ID to the appointment.

		resource_ids
		A list of resource IDs to associate with the new appointment.

		send_email
		Whether to send client an email for cancellations. An email is sent
		only if the client has an email address and automatic emails have been
		set up.   <br />Default: **false**

		session_type_id
		The session type associated with the new appointment.

		staff_id
		The ID of the staff member who is adding the new appointment.

		start_date_time
		The start date and time of the new appointment.

		test
		When `true`, indicates that the method is to be validated, but no new
		appointment data is added.   <br />Default: **false**
	"""

	input_map = {
		'AppointmentId': 'appointment_id',
		'EndDateTime': 'end_date_time',
		'Execute': 'execute',
		'GenderPreference': 'gender_preference',
		'Notes': 'notes',
		'ProviderId': 'provider_id',
		'ResourceIds': 'resource_ids',
		'SendEmail': 'send_email',
		'SessionTypeId': 'session_type_id',
		'StaffId': 'staff_id',
		'StartDateTime': 'start_date_time',
		'Test': 'test',
		}

	output_map = {
		'appointment_id': 'AppointmentId',
		'end_date_time': 'EndDateTime',
		'execute': 'Execute',
		'gender_preference': 'GenderPreference',
		'notes': 'Notes',
		'provider_id': 'ProviderId',
		'resource_ids': 'ResourceIds',
		'send_email': 'SendEmail',
		'session_type_id': 'SessionTypeId',
		'staff_id': 'StaffId',
		'start_date_time': 'StartDateTime',
		'test': 'Test',
		}	def __init__(self, appointment_id):
		self.appointment_id = appointment_id
