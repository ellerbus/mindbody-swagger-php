from .base_model import BaseModel

from .pagination_response import PaginationResponse
from .class import Class

class GetClassesResponse(BaseModel):
	"""
	no description available

	Attributes:

		pagination_response
		Contains information about the pagination used.

		classes
		A list of the requested classes.
	"""

	input_map = {
		'PaginationResponse': ('pagination_response', PaginationResponse),
		'Classes': ['classes', Class],
		}

	output_map = {
		'pagination_response': 'PaginationResponse',
		'classes': 'Classes',
		}

	pagination_response = None
	classes = None

