from .base_model import BaseModel


class GetStaffAppointmentsRequest(BaseModel):
	"""
	no description available

	Attributes:

		appointment_ids
		A list of the requested appointment IDs.

		location_ids
		A list of the requested location IDs.

		start_date
		The start date of the requested date range. If omitted, the default is
		used.   <br />Default: **today’s date**

		end_date
		The end date of the requested date range.   <br />Default:
		**StartDate**

		staff_ids
		List of staff IDs to be returned. Use a value of zero to return all
		staff appointments.

		client_id
		The client ID to be returned.

		limit
		Number of results to include, defaults to 100

		offset
		Page offset, defaults to 0.
	"""

	input_map = {
		'AppointmentIds': 'appointment_ids',
		'LocationIds': 'location_ids',
		'StartDate': 'start_date',
		'EndDate': 'end_date',
		'StaffIds': 'staff_ids',
		'ClientId': 'client_id',
		'Limit': 'limit',
		'Offset': 'offset',
		}

	output_map = {
		'appointment_ids': 'AppointmentIds',
		'location_ids': 'LocationIds',
		'start_date': 'StartDate',
		'end_date': 'EndDate',
		'staff_ids': 'StaffIds',
		'client_id': 'ClientId',
		'limit': 'Limit',
		'offset': 'Offset',
		}