from .base_model import BaseModel

from .pagination_response import PaginationResponse
from .client import Client

class GetClientAccountBalancesResponse(BaseModel):
	"""
	no description available

	Attributes:

		pagination_response
		Contains information about the pagination used.

		clients
		A list of clients.
	"""

	input_map = {
		'PaginationResponse': ('pagination_response', PaginationResponse),
		'Clients': ['clients', Client],
		}

	output_map = {
		'pagination_response': 'PaginationResponse',
		'clients': 'Clients',
		}

	pagination_response = None
	clients = None

