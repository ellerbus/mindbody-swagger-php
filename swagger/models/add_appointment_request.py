from .base_model import BaseModel


class AddAppointmentRequest(BaseModel):
	"""
	no description available

	Attributes:

		apply_payment
		When `true`, indicates that a payment should be applied to the
		appointment.   <br />Default: **true**

		client_id
		The RRSID of the client for whom the new appointment is being made.

		duration
		The duration of the appointment. This parameter is used to change the
		default duration of an appointment.

		execute
		The action taken to add this appointment.

		end_date_time
		The end date and time of the new appointment. <br />  Default:
		**StartDateTime**, offset by the staff member’s default appointment
		duration.

		gender_preference
		The client’s service provider gender preference.

		location_id
		The ID of the location where the new appointment is to take place.

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

		staff_requested
		When `true`, indicates that the staff member was requested
		specifically by the client.

		start_date_time
		The start date and time of the new appointment.

		test
		 When true, indicates that the method is to be validated, but no new
		appointment data is added.   <br />Default: **false**
	"""

	input_map = {
		'ApplyPayment': 'apply_payment',
		'ClientId': 'client_id',
		'Duration': 'duration',
		'Execute': 'execute',
		'EndDateTime': 'end_date_time',
		'GenderPreference': 'gender_preference',
		'LocationId': 'location_id',
		'Notes': 'notes',
		'ProviderId': 'provider_id',
		'ResourceIds': 'resource_ids',
		'SendEmail': 'send_email',
		'SessionTypeId': 'session_type_id',
		'StaffId': 'staff_id',
		'StaffRequested': 'staff_requested',
		'StartDateTime': 'start_date_time',
		'Test': 'test',
		}

	output_map = {
		'apply_payment': 'ApplyPayment',
		'client_id': 'ClientId',
		'duration': 'Duration',
		'execute': 'Execute',
		'end_date_time': 'EndDateTime',
		'gender_preference': 'GenderPreference',
		'location_id': 'LocationId',
		'notes': 'Notes',
		'provider_id': 'ProviderId',
		'resource_ids': 'ResourceIds',
		'send_email': 'SendEmail',
		'session_type_id': 'SessionTypeId',
		'staff_id': 'StaffId',
		'staff_requested': 'StaffRequested',
		'start_date_time': 'StartDateTime',
		'test': 'Test',
		}

	def __init__(self, client_id, location_id, session_type_id, staff_id, start_date_time):
		self.client_id = client_id
		self.location_id = location_id
		self.session_type_id = session_type_id
		self.staff_id = staff_id
		self.start_date_time = start_date_time
