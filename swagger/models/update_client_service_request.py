from .base_model import BaseModel


class UpdateClientServiceRequest(BaseModel):
	"""
	no description available

	Attributes:

		service_id
		The ID of the service to update.

		active_date
		The date that the service became active.

		expiration_date
		The date that the service is to expire.

		test
		When `true`, indicates that input information is to be validated, but
		not committed.<br />  When `false` or omitted, the database is
		affected.<br />  Default: **false**
	"""

	input_map = {
		'ServiceId': 'service_id',
		'ActiveDate': 'active_date',
		'ExpirationDate': 'expiration_date',
		'Test': 'test',
		}

	output_map = {
		'service_id': 'ServiceId',
		'active_date': 'ActiveDate',
		'expiration_date': 'ExpirationDate',
		'test': 'Test',
		}

	service_id = None
	active_date = None
	expiration_date = None
	test = None



	def __init__(self, service_id):
		self.service_id = service_id
