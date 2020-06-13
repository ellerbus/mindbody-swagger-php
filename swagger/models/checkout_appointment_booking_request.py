from .base_model import BaseModel

from .resource import Resource

class CheckoutAppointmentBookingRequest(BaseModel):
	"""
	no description available

	Attributes:

		staff_id
		The ID of the staff member who is to provide the service being booked.

		location_id
		The ID of the location where the appointment is to take place.

		session_type_id
		The ID of the session type of this appointment.

		resources
		Contains information about the resources to be used for the
		appointment.

		start_date_time
		The date and time that the appointment is to start in the business’
		timezone. This value must be passed in the format yyyy-mm-ddThh:mm:ss.

		end_date_time
		The date and time that the appointment is to end in the business’
		timezone. This value must be passed in the format yyyy-mm-ddThh:mm:ss.

		provider_id
		The National Provider Identifier (NPI) of the staff member who is to
		provide the service. For an explanation of Provider IDs, see [Provider
		IDs](https://support.mindbodyonline.com/s/article/204075743-Provider-
		IDs?language=en_US).
	"""

	input_map = {
		'StaffId': 'staff_id',
		'LocationId': 'location_id',
		'SessionTypeId': 'session_type_id',
		'Resources': ['resources', Resource],
		'StartDateTime': 'start_date_time',
		'EndDateTime': 'end_date_time',
		'ProviderId': 'provider_id',
		}

	output_map = {
		'staff_id': 'StaffId',
		'location_id': 'LocationId',
		'session_type_id': 'SessionTypeId',
		'resources': 'Resources',
		'start_date_time': 'StartDateTime',
		'end_date_time': 'EndDateTime',
		'provider_id': 'ProviderId',
		}

	staff_id = None
	location_id = None
	session_type_id = None
	resources = None
	start_date_time = None
	end_date_time = None
	provider_id = None

