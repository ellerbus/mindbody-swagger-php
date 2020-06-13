from .base_model import BaseModel

from .class import Class

class GetClassVisitsResponse(BaseModel):
	"""
	no description available

	Attributes:

		class
		Contains class and booking information.
	"""

	input_map = {
		'Class': ('class', Class),
		}

	output_map = {
		'class': 'Class',
		}

	class = None

