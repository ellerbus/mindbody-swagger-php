from .base_model import BaseModel

from .add_client_to_class_visit import AddClientToClassVisit

class AddClientToClassResponse(BaseModel):
	"""
	no description available

	Attributes:

		visit
		Contains information about the created visit.
	"""

	input_map = {
		'Visit': ('visit', AddClientToClassVisit),
		}

	output_map = {
		'visit': 'Visit',
		}

	visit = None

