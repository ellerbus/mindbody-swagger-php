from .base_model import BaseModel


class GetClassDescriptionsRequest(BaseModel):
	"""
	no description available

	Attributes:

		class_description_id
		Filters to the single result with the given ID.

		program_ids
		Filters results to class descriptions belonging to the given programs.

		start_class_date_time
		Filters the results to class descriptions for scheduled classes that
		happen on or after the given date and time.

		end_class_date_time
		Filters the results to class descriptions for scheduled classes that
		happen before the given date and time.

		staff_id
		Filters results to class descriptions for scheduled classes taught by
		the given staff member.

		location_id
		Filters results to classes descriptions for schedule classes as the
		given location.

		limit
		Number of results to include, defaults to 100

		offset
		Page offset, defaults to 0.
	"""

	input_map = {
		'ClassDescriptionId': 'class_description_id',
		'ProgramIds': 'program_ids',
		'StartClassDateTime': 'start_class_date_time',
		'EndClassDateTime': 'end_class_date_time',
		'StaffId': 'staff_id',
		'LocationId': 'location_id',
		'Limit': 'limit',
		'Offset': 'offset',
		}

	output_map = {
		'class_description_id': 'ClassDescriptionId',
		'program_ids': 'ProgramIds',
		'start_class_date_time': 'StartClassDateTime',
		'end_class_date_time': 'EndClassDateTime',
		'staff_id': 'StaffId',
		'location_id': 'LocationId',
		'limit': 'Limit',
		'offset': 'Offset',
		}

	class_description_id = None
	program_ids = None
	start_class_date_time = None
	end_class_date_time = None
	staff_id = None
	location_id = None
	limit = None
	offset = None

