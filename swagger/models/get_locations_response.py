from .base_model import BaseModel

from .pagination_response import PaginationResponse

class GetLocationsResponse(BaseModel):
	"""
	no description available

	Attributes:

		pagination_response
		Contains information about the pagination used.

		locations
		Contains information about the locations.
	"""

	input_map = {
		'PaginationResponse': ('pagination_response', PaginationResponse)
		'Locations': 'locations',
		}

	output_map = {
		'pagination_response': 'PaginationResponse',
		'locations': 'Locations',
		}