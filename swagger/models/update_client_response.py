from .base_model import BaseModel

from .client import Client

class UpdateClientResponse(BaseModel):
	"""
	no description available

	Attributes:

		client
		Contains information about the updated client.
	"""

	input_map = {
		'Client': ('client', Client),
		}

	output_map = {
		'client': 'Client',
		}

		'Client': ('client', Client),

