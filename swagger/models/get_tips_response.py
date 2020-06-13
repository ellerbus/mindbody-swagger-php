from .base_model import BaseModel

from .pagination_response import PaginationResponse

class GetTipsResponse(BaseModel):
	"""
	no description available

	Attributes:

		pagination_response
		Contains information about the pagination used. See Pagination for a
		description of the Pagination information.

		tips
		Contains information about tips given to staff members within the
		given date range. Results are ordered by StaffId.
	"""

	input_map = {
		'PaginationResponse': ('pagination_response', PaginationResponse),
		'Tips': 'tips',
		}

	output_map = {
		'pagination_response': 'PaginationResponse',
		'tips': 'Tips',
		}

	pagination_response = None
	tips = None

