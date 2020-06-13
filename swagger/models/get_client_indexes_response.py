from .base_model import BaseModel


class GetClientIndexesResponse(BaseModel):
	"""
	no description available

	Attributes:

		client_indexes
		Contains information about the client indexes.
	"""

	input_map = {
		'ClientIndexes': 'client_indexes',
		}

	output_map = {
		'client_indexes': 'ClientIndexes',
		}

	client_indexes = None

