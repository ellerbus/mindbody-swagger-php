from .base_model import BaseModel

from .pagination_response import PaginationResponse
from .class_description import ClassDescription

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
		'PaginationResponse': ('pagination_response', PaginationResponse),
		'ClassDescriptions': ['class_descriptions', ClassDescription],
		}

	output_map = {
		'pagination_response': 'PaginationResponse',
		'class_descriptions': 'ClassDescriptions',
		}

	pagination_response = None
	class_descriptions = None

