from .base_model import BaseModel


class GetBookableItemsRequest(BaseModel):
	"""
	no description available

	Attributes:

		session_type_ids
		A list of the requested session type IDs.

		location_ids
		A list of the requested location IDs.

		staff_ids
		A list of the requested staff IDs.

		start_date
		The start date of the requested date range.   <br />Default:
		**today’s date**

		end_date
		The end date of the requested date range.   <br />Default:
		**StartDate**

		appointment_id
		If provided, filters out the appointment with this ID.

		ignore_default_session_length
		When `true`, availabilities that are non-default return, for example,
		a 30-minute availability with a 60-minute default session length.<br
		/>  When `false`, only availabilities that have the default session
		length return.

		limit
		Number of results to include, defaults to 100

		offset
		Page offset, defaults to 0.
	"""

	input_map = {
		'SessionTypeIds': 'session_type_ids',
		'LocationIds': 'location_ids',
		'StaffIds': 'staff_ids',
		'StartDate': 'start_date',
		'EndDate': 'end_date',
		'AppointmentId': 'appointment_id',
		'IgnoreDefaultSessionLength': 'ignore_default_session_length',
		'Limit': 'limit',
		'Offset': 'offset',
		}

	output_map = {
		'session_type_ids': 'SessionTypeIds',
		'location_ids': 'LocationIds',
		'staff_ids': 'StaffIds',
		'start_date': 'StartDate',
		'end_date': 'EndDate',
		'appointment_id': 'AppointmentId',
		'ignore_default_session_length': 'IgnoreDefaultSessionLength',
		'limit': 'Limit',
		'offset': 'Offset',
		}	def __init__(self, session_type_ids):
		self.session_type_ids = session_type_ids
