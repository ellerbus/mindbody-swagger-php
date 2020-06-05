from .base_model import BaseModel


class RemoveClientFromClassRequest(BaseModel):
	"""
	no description available

	Attributes:

		client_id
		The RSSID of the client to remove from the specified class.

		class_id
		The ID of the class that you want to remove the client from.

		test
		When `true`, the request ensures that its parameters are valid without
		affecting real data.<br />  When `false`, the request performs as
		intended and may affect live client data.<br />  Default: **false**

		send_email
		When `true`, indicates that the client should be sent an email.
		Depending on the site and client settings, an email may or may not be
		sent.<br />  Default: **false**

		late_cancel
		When `true`, indicates that the client is to be late cancelled from
		the class.<br />  When `false`, indicates that the client is to be
		early cancelled from the class.<br />  Default: **false**
	"""

	input_map = {
		'ClientId': 'client_id',
		'ClassId': 'class_id',
		'Test': 'test',
		'SendEmail': 'send_email',
		'LateCancel': 'late_cancel',
		}

	output_map = {
		'client_id': 'ClientId',
		'class_id': 'ClassId',
		'test': 'Test',
		'send_email': 'SendEmail',
		'late_cancel': 'LateCancel',
		}	def __init__(self, client_id, class_id):
		self.client_id = client_id
		self.class_id = class_id
