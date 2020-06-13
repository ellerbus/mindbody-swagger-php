from .base_model import BaseModel

from .client_service import ClientService

class UpdateClientServiceResponse(BaseModel):
	"""
	no description available

	Attributes:

		client_service
		Contains information about the updated service.
	"""

	input_map = {
		'ClientService': ('client_service', ClientService),
		}

	output_map = {
		'client_service': 'ClientService',
		}

		'ClientService': ('client_service', ClientService),

