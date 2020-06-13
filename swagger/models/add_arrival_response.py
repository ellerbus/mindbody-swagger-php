from .base_model import BaseModel

from .client_service import ClientService

class AddArrivalResponse(BaseModel):
	"""
	no description available

	Attributes:

		arrival_added
		When `true`, indicates that the arrival was added to the database.

		client_service
		Contains information about the pricing option being used to pay for
		the client’s current service session.
	"""

	input_map = {
		'ArrivalAdded': 'arrival_added',
		'ClientService': ('client_service', ClientService),
		}

	output_map = {
		'arrival_added': 'ArrivalAdded',
		'client_service': 'ClientService',
		}

	arrival_added = None
	client_service = None

