from .base_model import BaseModel

from .pagination_response import PaginationResponse

class GetTimeCardsResponse(BaseModel):
	"""
	no description available

	Attributes:

		pagination_response
		Contains information about the pagination used.

		time_cards
		Information about time card entries, ordered by staff ID.
	"""

	input_map = {
		'PaginationResponse': ('pagination_response', PaginationResponse),
		'TimeCards': 'time_cards',
		}

	output_map = {
		'pagination_response': 'PaginationResponse',
		'time_cards': 'TimeCards',
		}