from .base_model import BaseModel

from .pagination_response import PaginationResponse
from .client_service import ClientService

class GetClientServicesResponse(BaseModel):
	"""
	no description available

	Attributes:

		pagination_response
		Contains information about the pagination used.

		client_services
		Contains information about client pricing options.
	"""

	input_map = {
		'PaginationResponse': ('pagination_response', PaginationResponse),
		'ClientServices': ['client_services', ClientService],
		}

	output_map = {
		'pagination_response': 'PaginationResponse',
		'client_services': 'ClientServices',
		}

	pagination_response = None
	client_services = None

