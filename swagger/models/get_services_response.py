from .base_model import BaseModel

from .pagination_response import PaginationResponse

class GetServicesResponse(BaseModel):
	"""
	no description available

	Attributes:

		pagination_response
		Contains information about the pagination used.

		services
		Contains information about the services.
	"""

	input_map = {
		'PaginationResponse': ('pagination_response', PaginationResponse),
		'Services': 'services',
		}

	output_map = {
		'pagination_response': 'PaginationResponse',
		'services': 'Services',
		}