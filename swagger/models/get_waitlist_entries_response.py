from .base_model import BaseModel

from .pagination_response import PaginationResponse

class GetWaitlistEntriesResponse(BaseModel):
	"""
	no description available

	Attributes:

		pagination_response
		Contains information about the pagination used.

		waitlist_entries
		Contains information about the waiting list entries.
	"""

	input_map = {
		'PaginationResponse': ('pagination_response', PaginationResponse),
		'WaitlistEntries': 'waitlist_entries',
		}

	output_map = {
		'pagination_response': 'PaginationResponse',
		'waitlist_entries': 'WaitlistEntries',
		}

		'PaginationResponse': ('pagination_response', PaginationResponse),
	waitlist_entries = None

