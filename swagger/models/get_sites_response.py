from .base_model import BaseModel

from .pagination_response import PaginationResponse

class GetSitesResponse(BaseModel):
	"""
	no description available

	Attributes:

		pagination_response
		Contains information about the pagination used.

		sites
		Contains information about the sites.
	"""

	input_map = {
		'PaginationResponse': ('pagination_response', PaginationResponse),
		'Sites': 'sites',
		}

	output_map = {
		'pagination_response': 'PaginationResponse',
		'sites': 'Sites',
		}

		'PaginationResponse': ('pagination_response', PaginationResponse),
	sites = None

