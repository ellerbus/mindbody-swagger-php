from .base_model import BaseModel

from .pagination_response import PaginationResponse
from .resource import Resource

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
		'Resources': ['resources', Resource],
		}

	output_map = {
		'pagination_response': 'PaginationResponse',
		'resources': 'Resources',
		}

	pagination_response = None
	resources = None

