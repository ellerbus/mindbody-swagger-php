from .base_model import BaseModel

from .pagination_response import PaginationResponse
from .visit import Visit

class GetClientVisitsResponse(BaseModel):
	"""
	no description available

	Attributes:

		pagination_response
		Contains information about the pagination used.

		visits
		Contains information about client visits.
	"""

	input_map = {
		'PaginationResponse': ('pagination_response', PaginationResponse),
		'Visits': ['visits', Visit],
		}

	output_map = {
		'pagination_response': 'PaginationResponse',
		'visits': 'Visits',
		}

	pagination_response = None
	visits = None

