from .base_model import BaseModel

from .pagination_response import PaginationResponse

class GetClientsResponse(BaseModel):
	"""
	no description available

	Attributes:

		pagination_response
		Contains information about the pagination used.

		clients
		The requested clients.
	"""

	input_map = {
		'PaginationResponse': ('pagination_response', PaginationResponse),
		'Clients': 'clients',
		}

	output_map = {
		'pagination_response': 'PaginationResponse',
		'clients': 'Clients',
		}

		'PaginationResponse': ('pagination_response', PaginationResponse),
	clients = None

