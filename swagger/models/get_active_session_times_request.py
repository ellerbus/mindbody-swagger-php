from .base_model import BaseModel


class GetActiveSessionTimesRequest(BaseModel):
	"""
	no description available

	Attributes:

		schedule_type
		Filters on the provided the schedule type. Either `SessionTypeIds` or
		`ScheduleType` must be provided.

		session_type_ids
		Filters on the provided session type IDs. Either `SessionTypeIds` or
		`ScheduleType` must be provided.

		start_time
		Filters results to times that start on or after this time on the
		current date. Any date provided is ignored.  <br />Default:
		**00:00:00**

		end_time
		Filters results to times that end on or before this time on the
		current date. Any date provided is ignored..  <br />Default:
		**23:59:59**

		limit
		Number of results to include, defaults to 100

		offset
		Page offset, defaults to 0.
	"""

	input_map = {
		'ScheduleType': 'schedule_type',
		'SessionTypeIds': 'session_type_ids',
		'StartTime': 'start_time',
		'EndTime': 'end_time',
		'Limit': 'limit',
		'Offset': 'offset',
		}

	output_map = {
		'schedule_type': 'ScheduleType',
		'session_type_ids': 'SessionTypeIds',
		'start_time': 'StartTime',
		'end_time': 'EndTime',
		'limit': 'Limit',
		'offset': 'Offset',
		}

	schedule_type = None
	session_type_ids = None
	start_time = None
	end_time = None
	limit = None
	offset = None

