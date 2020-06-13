from .base_model import BaseModel


class Appointment(BaseModel):
	"""
	Contains information about an appointment.

	Attributes:

		gender_preference
		The preferred gender of the appointment provider.

		duration
		The duration of the appointment.

		provider_id
		If a user has Complementary and Alternative Medicine features enabled,
		this property indicates the provider assigned to the appointment.

		id
		The unique ID of the appointment.

		status
		The status of this appointment.

		start_date_time
		The date and time the appointment is to start.

		end_date_time
		The date and time the appointment is to end.

		notes
		Any notes associated with the appointment.

		staff_requested
		When `true`, indicates that the staff member was requested
		specifically by the client.

		program_id
		The ID of the program to which this appointment belongs.

		session_type_id
		The ID of the session type of this appointment.

		location_id
		The ID of the location where this appointment is to take place.

		staff_id
		The ID of the staff member providing the service for this appointment.

		client_id
		The RSSID of the client who is booked for this appointment.

		first_appointment
		When `true`, indicates that this is the client’s first appointment
		at this site.

		client_service_id
		The ID of the pass on the client’s account that is to pay for this
		appointment.

		resources
		The resources this appointment is to use.
	"""

	input_map = {
		'GenderPreference': 'gender_preference',
		'Duration': 'duration',
		'ProviderId': 'provider_id',
		'Id': 'id',
		'Status': 'status',
		'StartDateTime': 'start_date_time',
		'EndDateTime': 'end_date_time',
		'Notes': 'notes',
		'StaffRequested': 'staff_requested',
		'ProgramId': 'program_id',
		'SessionTypeId': 'session_type_id',
		'LocationId': 'location_id',
		'StaffId': 'staff_id',
		'ClientId': 'client_id',
		'FirstAppointment': 'first_appointment',
		'ClientServiceId': 'client_service_id',
		'Resources': 'resources',
		}

	output_map = {
		'gender_preference': 'GenderPreference',
		'duration': 'Duration',
		'provider_id': 'ProviderId',
		'id': 'Id',
		'status': 'Status',
		'start_date_time': 'StartDateTime',
		'end_date_time': 'EndDateTime',
		'notes': 'Notes',
		'staff_requested': 'StaffRequested',
		'program_id': 'ProgramId',
		'session_type_id': 'SessionTypeId',
		'location_id': 'LocationId',
		'staff_id': 'StaffId',
		'client_id': 'ClientId',
		'first_appointment': 'FirstAppointment',
		'client_service_id': 'ClientServiceId',
		'resources': 'Resources',
		}

	gender_preference = None
	duration = None
	provider_id = None
	id = None
	status = None
	start_date_time = None
	end_date_time = None
	notes = None
	staff_requested = None
	program_id = None
	session_type_id = None
	location_id = None
	staff_id = None
	client_id = None
	first_appointment = None
	client_service_id = None
	resources = None

