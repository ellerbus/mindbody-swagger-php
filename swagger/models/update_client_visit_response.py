from .base_model import BaseModel

from .visit import Visit

class UpdateClientVisitResponse(BaseModel):
	"""
	no description available

	Attributes:

		visit
		The updated visit.
	"""

	input_map = {
		'Visit': ('visit', Visit)
		}

	output_map = {
		'visit': 'Visit',
		}