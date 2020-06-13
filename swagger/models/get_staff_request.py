from .base_model import BaseModel


class GetStaffRequest(BaseModel):
	"""
	no description available

	Attributes:

		staff_ids
		A list of the requested staff IDs.

		filters
		Filters to apply to the search. Possible values are:  * StaffViewable
		* AppointmentInstructor  * ClassInstructor  * Male  * Female

		session_type_id
		Return only staff members that are available for the specified session
		type. You must supply a valid `StartDateTime` and `LocationID` to use
		this parameter.

		start_date_time
		Return only staff members that are available at the specified date and
		time. You must supply a valid `SessionTypeID` and `LocationID` to use
		this parameter.

		location_id
		Return only staff members that are available at the specified
		location. You must supply a valid `SessionTypeID` and `StartDateTime`
		to use this parameter.

		limit
		Number of results to include, defaults to 100

		offset
		Page offset, defaults to 0.
	"""

	input_map = {
		'StaffIds': 'staff_ids',
		'Filters': 'filters',
		'SessionTypeId': 'session_type_id',
		'StartDateTime': 'start_date_time',
		'LocationId': 'location_id',
		'Limit': 'limit',
		'Offset': 'offset',
		}

	output_map = {
		'staff_ids': 'StaffIds',
		'filters': 'Filters',
		'session_type_id': 'SessionTypeId',
		'start_date_time': 'StartDateTime',
		'location_id': 'LocationId',
		'limit': 'Limit',
		'offset': 'Offset',
		}

	staff_ids = None
	filters = None
	session_type_id = None
	start_date_time = None
	location_id = None
	limit = None
	offset = None

