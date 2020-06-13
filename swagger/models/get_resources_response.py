from .base_model import BaseModel

from .pagination_response import PaginationResponse

class GetResourcesResponse(BaseModel):
	"""
	no description available

	Attributes:

		pagination_response
		Contains information about the pagination used.

		resources
		Contains information about resources as the business.
	"""

	input_map = {
		'PaginationResponse': ('pagination_response', PaginationResponse),
		'Resources': 'resources',
		}

	output_map = {
		'pagination_response': 'PaginationResponse',
		'resources': 'Resources',
		}

		'PaginationResponse': ('pagination_response', PaginationResponse),
	resources = None

