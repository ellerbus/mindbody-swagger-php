from .base_model import BaseModel

from .pagination_response import PaginationResponse
from .client_purchase_record import ClientPurchaseRecord

class GetClientPurchasesResponse(BaseModel):
	"""
	no description available

	Attributes:

		pagination_response
		Contains information about the pagination used.

		purchases
		Contains information that describes the item sold and the payment.
	"""

	input_map = {
		'PaginationResponse': ('pagination_response', PaginationResponse),
		'Purchases': ['purchases', ClientPurchaseRecord],
		}

	output_map = {
		'pagination_response': 'PaginationResponse',
		'purchases': 'Purchases',
		}

	pagination_response = None
	purchases = None

