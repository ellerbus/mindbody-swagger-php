from .base_model import BaseModel

from .pagination_response import PaginationResponse
from .availability import Availability

class GetBookableItemsResponse(BaseModel):
	"""
	no description available

	Attributes:

		pagination_response
		Contains information about the pagination used.

		availabilities
		Contains information about the availabilities for appointment booking.
	"""

	input_map = {
		'PaginationResponse': ('pagination_response', PaginationResponse),
		'Availabilities': ['availabilities', Availability],
		}

	output_map = {
		'pagination_response': 'PaginationResponse',
		'availabilities': 'Availabilities',
		}

	pagination_response = None
	availabilities = None

