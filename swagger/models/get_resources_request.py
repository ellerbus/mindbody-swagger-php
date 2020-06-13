from .base_model import BaseModel


class GetResourcesRequest(BaseModel):
	"""
	no description available

	Attributes:

		session_type_ids
		List of session type IDs.<br />  Default: **all**

		location_id
		The location of the resource. This parameter is ignored if
		`EndDateTime` or `LocationID` is not set.<br />  Default: **all**

		start_date_time
		The time the resource starts. This parameter is ignored if
		`EndDateTime` or `LocationID` is not set.

		end_date_time
		The time the resource ends. This parameter is ignored if `EndDateTime`
		or `LocationID` is not set.

		limit
		Number of results to include, defaults to 100

		offset
		Page offset, defaults to 0.
	"""

	input_map = {
		'SessionTypeIds': 'session_type_ids',
		'LocationId': 'location_id',
		'StartDateTime': 'start_date_time',
		'EndDateTime': 'end_date_time',
		'Limit': 'limit',
		'Offset': 'offset',
		}

	output_map = {
		'session_type_ids': 'SessionTypeIds',
		'location_id': 'LocationId',
		'start_date_time': 'StartDateTime',
		'end_date_time': 'EndDateTime',
		'limit': 'Limit',
		'offset': 'Offset',
		}

	session_type_ids = None
	location_id = None
	start_date_time = None
	end_date_time = None
	limit = None
	offset = None

