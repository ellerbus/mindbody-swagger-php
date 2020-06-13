from .base_model import BaseModel


class GetEnrollmentsRequest(BaseModel):
	"""
	no description available

	Attributes:

		class_schedule_ids
		A list of the requested class schedule IDs. If omitted, all class
		schedule IDs return.

		end_date
		The end of the date range. The response returns any active enrollments
		that occur on or before this day.<br />  Default: **StartDate**

		location_ids
		List of the IDs for the requested locations. If omitted, all location
		IDs return.

		program_ids
		List of the IDs for the requested programs. If omitted, all program
		IDs return.

		session_type_ids
		List of the IDs for the requested session types. If omitted, all
		session types IDs return.

		staff_ids
		List of the IDs for the requested staff IDs. If omitted, all staff IDs
		return.

		start_date
		The start of the date range. The response returns any active
		enrollments that occur on or after this day.<br />  Default:
		**today’s date**

		limit
		Number of results to include, defaults to 100

		offset
		Page offset, defaults to 0.
	"""

	input_map = {
		'ClassScheduleIds': 'class_schedule_ids',
		'EndDate': 'end_date',
		'LocationIds': 'location_ids',
		'ProgramIds': 'program_ids',
		'SessionTypeIds': 'session_type_ids',
		'StaffIds': 'staff_ids',
		'StartDate': 'start_date',
		'Limit': 'limit',
		'Offset': 'offset',
		}

	output_map = {
		'class_schedule_ids': 'ClassScheduleIds',
		'end_date': 'EndDate',
		'location_ids': 'LocationIds',
		'program_ids': 'ProgramIds',
		'session_type_ids': 'SessionTypeIds',
		'staff_ids': 'StaffIds',
		'start_date': 'StartDate',
		'limit': 'Limit',
		'offset': 'Offset',
		}

	class_schedule_ids = None
	end_date = None
	location_ids = None
	program_ids = None
	session_type_ids = None
	staff_ids = None
	start_date = None
	limit = None
	offset = None

