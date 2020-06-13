from .base_model import BaseModel

from .pagination_response import PaginationResponse

class GetSessionTypesResponse(BaseModel):
	"""
	no description available

	Attributes:

		pagination_response
		Contains information about the pagination properties used.

		session_types
		Contains information about sessions.
	"""

	input_map = {
		'PaginationResponse': ('pagination_response', PaginationResponse),
		'SessionTypes': 'session_types',
		}

	output_map = {
		'pagination_response': 'PaginationResponse',
		'session_types': 'SessionTypes',
		}

	pagination_response = None
	session_types = None

