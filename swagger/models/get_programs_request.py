from .base_model import BaseModel


class GetProgramsRequest(BaseModel):
	"""
	no description available

	Attributes:

		schedule_type
		A schedule type used to filter the returned results.

		online_only
		If `true`, filters results to show only those programs that are shown
		online.<br />  If `false`, all programs are returned.<br />  Default:
		**false**

		limit
		Number of results to include, defaults to 100

		offset
		Page offset, defaults to 0.
	"""

	input_map = {
		'ScheduleType': 'schedule_type',
		'OnlineOnly': 'online_only',
		'Limit': 'limit',
		'Offset': 'offset',
		}

	output_map = {
		'schedule_type': 'ScheduleType',
		'online_only': 'OnlineOnly',
		'limit': 'Limit',
		'offset': 'Offset',
		}