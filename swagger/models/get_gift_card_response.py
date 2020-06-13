from .base_model import BaseModel

from .pagination_response import PaginationResponse
from .gift_card import GiftCard

class GetGiftCardResponse(BaseModel):
	"""
	no description available

	Attributes:

		pagination_response
		Contains information about the pagination used.

		gift_cards
		Contains information about the gift cards.
	"""

	input_map = {
		'PaginationResponse': ('pagination_response', PaginationResponse),
		'GiftCards': ['gift_cards', GiftCard],
		}

	output_map = {
		'pagination_response': 'PaginationResponse',
		'gift_cards': 'GiftCards',
		}

	pagination_response = None
	gift_cards = None

