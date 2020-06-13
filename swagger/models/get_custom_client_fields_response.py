from .base_model import BaseModel

from .pagination_response import PaginationResponse

class GetCustomClientFieldsResponse(BaseModel):
	"""
	no description available

	Attributes:

		pagination_response
		Contains information about the pagination used.

		custom_client_fields
		Contains information about the available custom client fields.
	"""

	input_map = {
		'PaginationResponse': ('pagination_response', PaginationResponse),
		'CustomClientFields': 'custom_client_fields',
		}

	output_map = {
		'pagination_response': 'PaginationResponse',
		'custom_client_fields': 'CustomClientFields',
		}

	pagination_response = None
	custom_client_fields = None

