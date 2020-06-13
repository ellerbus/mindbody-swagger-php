from .base_model import BaseModel


class GetClassSchedulesRequest(BaseModel):
	"""
	no description available

	Attributes:

		class_schedule_ids
		The class schedule IDs.  <br />Default: **all**

		end_date
		The end date of the range. Return any active enrollments that occur on
		or before this day.  <br />Default: **StartDate**

		location_ids
		The location IDs.   <br />Default: **all**

		program_ids
		The program IDs.   <br />Default: **all**

		session_type_ids
		The session type IDs.   <br />Default: **all**

		staff_ids
		The staff IDs.   <br />Default: **all**

		start_date
		The start date of the range. Return any active enrollments that occur
		on or after this day.  <br />Default: **today’s date**

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

