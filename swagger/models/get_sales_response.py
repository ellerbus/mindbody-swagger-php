from .base_model import BaseModel

from .pagination_response import PaginationResponse

class GetSalesResponse(BaseModel):
	"""
	no description available

	Attributes:

		pagination_response
		Contains information about the pagination used.

		sales
		Contains the Sale objects, each of which describes the sale and
		payment for a purchase event.
	"""

	input_map = {
		'PaginationResponse': ('pagination_response', PaginationResponse),
		'Sales': 'sales',
		}

	output_map = {
		'pagination_response': 'PaginationResponse',
		'sales': 'Sales',
		}

	pagination_response = None
	sales = None

