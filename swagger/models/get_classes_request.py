from .base_model import BaseModel


class GetClassesRequest(BaseModel):
	"""
	no description available

	Attributes:

		class_description_ids
		The requested class description IDs.

		class_ids
		The requested class IDs.

		staff_ids
		The requested IDs of the teaching staff members.

		start_date_time
		The requested start date for filtering.   <br />Default: **today’s
		date**

		end_date_time
		The requested end date for filtering.  <br />Default: **today’s
		date**

		client_id
		The client ID of the client who is viewing this class list. Based on
		identity, the client may be able to see additional information, such
		as membership specials.

		program_ids
		A list of program IDs on which to base the search.

		session_type_ids
		A list of session type IDs on which to base the search.

		location_ids
		A list of location IDs on which to base the search.

		semester_ids
		A list of semester IDs on which to base the search.

		hide_canceled_classes
		When `true`, canceled classes are removed from the response.<br />
		When `false`, canceled classes are included in the response.<br />
		Default: **false**

		scheduling_window
		When `true`, classes outside scheduling window are removed from the
		response.<br />  When `false`, classes are included in the response,
		regardless of the scheduling window.<br />  Default: **false**

		last_modified_date
		When included in the request, only records modified on or after the
		`LastModifiedDate` specified are included in the response.

		limit
		Number of results to include, defaults to 100

		offset
		Page offset, defaults to 0.
	"""

	input_map = {
		'ClassDescriptionIds': 'class_description_ids',
		'ClassIds': 'class_ids',
		'StaffIds': 'staff_ids',
		'StartDateTime': 'start_date_time',
		'EndDateTime': 'end_date_time',
		'ClientId': 'client_id',
		'ProgramIds': 'program_ids',
		'SessionTypeIds': 'session_type_ids',
		'LocationIds': 'location_ids',
		'SemesterIds': 'semester_ids',
		'HideCanceledClasses': 'hide_canceled_classes',
		'SchedulingWindow': 'scheduling_window',
		'LastModifiedDate': 'last_modified_date',
		'Limit': 'limit',
		'Offset': 'offset',
		}

	output_map = {
		'class_description_ids': 'ClassDescriptionIds',
		'class_ids': 'ClassIds',
		'staff_ids': 'StaffIds',
		'start_date_time': 'StartDateTime',
		'end_date_time': 'EndDateTime',
		'client_id': 'ClientId',
		'program_ids': 'ProgramIds',
		'session_type_ids': 'SessionTypeIds',
		'location_ids': 'LocationIds',
		'semester_ids': 'SemesterIds',
		'hide_canceled_classes': 'HideCanceledClasses',
		'scheduling_window': 'SchedulingWindow',
		'last_modified_date': 'LastModifiedDate',
		'limit': 'Limit',
		'offset': 'Offset',
		}