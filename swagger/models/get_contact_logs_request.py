from .base_model import BaseModel


class GetContactLogsRequest(BaseModel):
	"""
	no description available

	Attributes:

		client_id
		The ID of the client whose contact logs are being requested.

		start_date
		Filters the results to contact logs created on or after this date.<br
		/>  Default: **the current date**

		end_date
		Filters the results to contact logs created before this date.<br />
		Default: **the start date**

		staff_ids
		Filters the results to return contact logs assigned to one or more
		staff IDs.

		show_system_generated
		When `true`, system-generated contact logs are returned in the
		results.<br />  Default: **false**

		type_ids
		Filters the results to contact logs assigned one or more of these type
		IDs.

		subtype_ids
		Filters the results to contact logs assigned one or more of these
		subtype IDs.

		limit
		Number of results to include, defaults to 100

		offset
		Page offset, defaults to 0.
	"""

	input_map = {
		'ClientId': 'client_id',
		'StartDate': 'start_date',
		'EndDate': 'end_date',
		'StaffIds': 'staff_ids',
		'ShowSystemGenerated': 'show_system_generated',
		'TypeIds': 'type_ids',
		'SubtypeIds': 'subtype_ids',
		'Limit': 'limit',
		'Offset': 'offset',
		}

	output_map = {
		'client_id': 'ClientId',
		'start_date': 'StartDate',
		'end_date': 'EndDate',
		'staff_ids': 'StaffIds',
		'show_system_generated': 'ShowSystemGenerated',
		'type_ids': 'TypeIds',
		'subtype_ids': 'SubtypeIds',
		'limit': 'Limit',
		'offset': 'Offset',
		}	def __init__(self, client_id):
		self.client_id = client_id
