from .base_model import BaseModel

from .pagination_response import PaginationResponse

class GetContactLogsResponse(BaseModel):
	"""
	no description available

	Attributes:

		pagination_response
		Contains information about the pagination used.

		contact_logs
		Contains the information about the contact logs.
	"""

	input_map = {
		'PaginationResponse': ('pagination_response', PaginationResponse),
		'ContactLogs': 'contact_logs',
		}

	output_map = {
		'pagination_response': 'PaginationResponse',
		'contact_logs': 'ContactLogs',
		}