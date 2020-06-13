from .base_model import BaseModel

from .pagination_response import PaginationResponse

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
		'Availabilities': 'availabilities',
		}

	output_map = {
		'pagination_response': 'PaginationResponse',
		'availabilities': 'Availabilities',
		}

		'PaginationResponse': ('pagination_response', PaginationResponse),
	availabilities = None

