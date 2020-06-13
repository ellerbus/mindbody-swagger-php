from .base_model import BaseModel

from .pagination_response import PaginationResponse
from .time_card_event import TimeCardEvent

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
		'TimeCards': ['time_cards', TimeCardEvent],
		}

	output_map = {
		'pagination_response': 'PaginationResponse',
		'time_cards': 'TimeCards',
		}

	pagination_response = None
	time_cards = None

