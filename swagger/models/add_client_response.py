from .base_model import BaseModel

from .client import Client

class AddClientResponse(BaseModel):
	"""
	no description available

	Attributes:

		client
		Contains information about the client.
	"""

	input_map = {
		'Client': ('client', Client)
		}

	output_map = {
		'client': 'Client',
		}