from .base_model import BaseModel


class AddArrivalRequest(BaseModel):
	"""
	no description available

	Attributes:

		client_id
		The ID of the requested client.

		location_id
		The ID of the location for the requested arrival.
	"""

	input_map = {
		'ClientId': 'client_id',
		'LocationId': 'location_id',
		}

	output_map = {
		'client_id': 'ClientId',
		'location_id': 'LocationId',
		}

	client_id = None
	location_id = None



	def __init__(self, client_id, location_id):
		self.client_id = client_id
		self.location_id = location_id
