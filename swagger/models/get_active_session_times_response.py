from .base_model import BaseModel

from .pagination_response import PaginationResponse

class GetActiveSessionTimesResponse(BaseModel):
	"""
	no description available

	Attributes:

		pagination_response
		Contains information about the pagination used.

		active_session_times
		List of available start times for active sessions. Note the following:
		* The times returned represent possibilities for scheduling a session,
		not necessarily currently scheduled sessions.  * The response includes
		either all schedule types or those filtered by supplying
		`ScheduleType` or `SessionTypeIds`.  * Each session has an associated
		schedule type, but when you supply `SessionTypeIds`, they may map to
		one or more of the schedule types.
	"""

	input_map = {
		'PaginationResponse': ('pagination_response', PaginationResponse)
		'ActiveSessionTimes': 'active_session_times',
		}

	output_map = {
		'pagination_response': 'PaginationResponse',
		'active_session_times': 'ActiveSessionTimes',
		}