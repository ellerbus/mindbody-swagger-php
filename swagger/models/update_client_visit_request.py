from .base_model import BaseModel


class UpdateClientVisitRequest(BaseModel):
	"""
	no description available

	Attributes:

		visit_id
		The ID of the visit to be updated.

		makeup
		When `true`, indicates that the visit is eligible to be made up.

		signed_in
		When `true`, indicates that the client has signed in for the visit.

		execute
		The execute code used to update this visit. Possible values are:  *
		Cancel  * Latecancel  * Unlatecancel

		test
		When `true`, indicates that test mode is enabled. When test mode is
		enabled, input information is validated, but not committed.<br />
		Default: **false**

		send_email
		When `true`, indicates that the client should be sent an email for
		cancellations. Note that email is not sent unless the client has an
		email address and automatic emails have been set up correctly.<br />
		Default: **false**
	"""

	input_map = {
		'VisitId': 'visit_id',
		'Makeup': 'makeup',
		'SignedIn': 'signed_in',
		'Execute': 'execute',
		'Test': 'test',
		'SendEmail': 'send_email',
		}

	output_map = {
		'visit_id': 'VisitId',
		'makeup': 'Makeup',
		'signed_in': 'SignedIn',
		'execute': 'Execute',
		'test': 'Test',
		'send_email': 'SendEmail',
		}	def __init__(self, visit_id):
		self.visit_id = visit_id
