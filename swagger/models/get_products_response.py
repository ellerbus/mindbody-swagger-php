from .base_model import BaseModel

from .pagination_response import PaginationResponse

class GetProductsResponse(BaseModel):
	"""
	no description available

	Attributes:

		pagination_response
		Contains information about the pagination used.

		products
		Contains information about the products.
	"""

	input_map = {
		'PaginationResponse': ('pagination_response', PaginationResponse),
		'Products': 'products',
		}

	output_map = {
		'pagination_response': 'PaginationResponse',
		'products': 'Products',
		}

	pagination_response = None
	products = None

