from .base_model import BaseModel

from .pagination_response import PaginationResponse

class GetEnrollmentsResponse(BaseModel):
	"""
	no description available

	Attributes:

		pagination_response
		Contains information about the pagination used.

		enrollments
		Contains information about the enrollments.
	"""

	input_map = {
		'PaginationResponse': ('pagination_response', PaginationResponse)
		'Enrollments': 'enrollments',
		}

	output_map = {
		'pagination_response': 'PaginationResponse',
		'enrollments': 'Enrollments',
		}