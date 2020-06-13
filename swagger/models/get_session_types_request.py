from .base_model import BaseModel


class GetSessionTypesRequest(BaseModel):
	"""
	no description available

	Attributes:

		program_i_ds
		Filters results to session types that belong to one of the given
		program IDs. If omitted, all program IDs return.

		online_only
		When `true`, indicates that only the session types that can be booked
		online should be returned.<br />  Default: **false**

		limit
		Number of results to include, defaults to 100

		offset
		Page offset, defaults to 0.
	"""

	input_map = {
		'ProgramIDs': 'program_i_ds',
		'OnlineOnly': 'online_only',
		'Limit': 'limit',
		'Offset': 'offset',
		}

	output_map = {
		'program_i_ds': 'ProgramIDs',
		'online_only': 'OnlineOnly',
		'limit': 'Limit',
		'offset': 'Offset',
		}

	program_i_ds = None
	online_only = None
	limit = None
	offset = None

