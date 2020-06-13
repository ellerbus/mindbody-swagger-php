from .base_model import BaseModel

from .pagination_response import PaginationResponse

class GetPackagesResponse(BaseModel):
	"""
	no description available

	Attributes:

		packages
		Contains information about the resulting packages.

		pagination_response
		Contains information about the pagination used.
	"""

	input_map = {
		'Packages': 'packages',
		'PaginationResponse': ('pagination_response', PaginationResponse),
		}

	output_map = {
		'packages': 'Packages',
		'pagination_response': 'PaginationResponse',
		}