from .base_model import BaseModel

from .class import Class

class RemoveClientFromClassResponse(BaseModel):
	"""
	no description available

	Attributes:

		class
		Contains information about the class from which the client was
		removed.
	"""

	input_map = {
		'Class': ('class', Class),
		}

	output_map = {
		'class': 'Class',
		}

		'Class': ('class', Class),

