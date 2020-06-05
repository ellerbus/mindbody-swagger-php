from .base_model import BaseModel

from .pagination_response import PaginationResponse

class GetClassDescriptionsResponse(BaseModel):
	"""
	no description available

	Attributes:

		pagination_response
		Contains information about the pagination used.

		class_descriptions
		Contains information about the class descriptions.
	"""

	input_map = {
		'PaginationResponse': ('pagination_response', PaginationResponse)
		'ClassDescriptions': 'class_descriptions',
		}

	output_map = {
		'pagination_response': 'PaginationResponse',
		'class_descriptions': 'ClassDescriptions',
		}