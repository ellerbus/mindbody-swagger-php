from .base_model import BaseModel

from .pagination_response import PaginationResponse

class GetCustomPaymentMethodsResponse(BaseModel):
	"""
	no description available

	Attributes:

		pagination_response
		Contains information about the pagination used.

		payment_methods
		Contains information about the custom payment methods.
	"""

	input_map = {
		'PaginationResponse': ('pagination_response', PaginationResponse),
		'PaymentMethods': 'payment_methods',
		}

	output_map = {
		'pagination_response': 'PaginationResponse',
		'payment_methods': 'PaymentMethods',
		}

	pagination_response = None
	payment_methods = None

