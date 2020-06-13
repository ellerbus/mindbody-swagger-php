from .base_model import BaseModel


class AddContactLogRequest(BaseModel):
	"""
	no description available

	Attributes:

		client_id
		The ID of the client whose contact log is being added.

		assigned_to_staff_id
		The ID of the staff member to whom the contact log is assigned.

		text
		The body of the contact log.

		followup_by_date
		The date by which the assigned staff member should complete this
		contact log.

		contact_method
		How the client wants to be contacted.

		contact_name
		The name of the person to be contacted by the assigned staff member.

		comments
		Any comments on the contact log.

		types
		The contact log types used to tag this contact log.

		test
		When `true`, indicates that this is a test request and no data is
		inserted into the subscriber’s database.<br />  When `false`, the
		database is updated.
	"""

	input_map = {
		'ClientId': 'client_id',
		'AssignedToStaffId': 'assigned_to_staff_id',
		'Text': 'text',
		'FollowupByDate': 'followup_by_date',
		'ContactMethod': 'contact_method',
		'ContactName': 'contact_name',
		'Comments': 'comments',
		'Types': 'types',
		'Test': 'test',
		}

	output_map = {
		'client_id': 'ClientId',
		'assigned_to_staff_id': 'AssignedToStaffId',
		'text': 'Text',
		'followup_by_date': 'FollowupByDate',
		'contact_method': 'ContactMethod',
		'contact_name': 'ContactName',
		'comments': 'Comments',
		'types': 'Types',
		'test': 'Test',
		}

	def __init__(self, client_id, contact_method):
		self.client_id = client_id
		self.contact_method = contact_method
