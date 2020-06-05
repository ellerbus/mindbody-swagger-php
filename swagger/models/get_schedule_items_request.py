from .base_model import BaseModel


class GetScheduleItemsRequest(BaseModel):
	"""
	no description available

	Attributes:

		location_ids
		A list of requested location IDs.

		staff_ids
		A list of requested staff IDs.

		start_date
		The start date of the requested date range.   <br />Default:
		**today’s date**

		end_date
		The end date of the requested date range.   <br />Default: **today’s
		date**

		ignore_prep_finish_times
		When `true`, appointment preparation and finish unavailabilities are
		not returned.   <br />Default: **false**

		limit
		Number of results to include, defaults to 100

		offset
		Page offset, defaults to 0.
	"""

	input_map = {
		'LocationIds': 'location_ids',
		'StaffIds': 'staff_ids',
		'StartDate': 'start_date',
		'EndDate': 'end_date',
		'IgnorePrepFinishTimes': 'ignore_prep_finish_times',
		'Limit': 'limit',
		'Offset': 'offset',
		}

	output_map = {
		'location_ids': 'LocationIds',
		'staff_ids': 'StaffIds',
		'start_date': 'StartDate',
		'end_date': 'EndDate',
		'ignore_prep_finish_times': 'IgnorePrepFinishTimes',
		'limit': 'Limit',
		'offset': 'Offset',
		}