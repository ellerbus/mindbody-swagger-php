from .base_model import BaseModel

from .pagination_response import PaginationResponse

class GetProgramsResponse(BaseModel):
	"""
	no description available

	Attributes:

		pagination_response
		Contains information about the pagination used.

		programs
		Contains information about the programs.
	"""

	input_map = {
		'PaginationResponse': ('pagination_response', PaginationResponse),
		'Programs': 'programs',
		}

	output_map = {
		'pagination_response': 'PaginationResponse',
		'programs': 'Programs',
		}

		'PaginationResponse': ('pagination_response', PaginationResponse),
	programs = None

