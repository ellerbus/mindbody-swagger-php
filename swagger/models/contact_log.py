from .base_model import BaseModel

from .client import Client
from .staff import Staff
from .staff import Staff
from .contact_log_comment import ContactLogComment
from .contact_log_type import ContactLogType

class ContactLog(BaseModel):
	"""
	A contact log.

	Attributes:

		id
		The contact log’s ID.

		text
		The contact log’s body text.

		created_date_time
		The local date and time when the contact log was created.

		followup_by_date
		The date by which the assigned staff member should close or follow up
		on this contact log.

		contact_method
		The method by which the client wants to be contacted.

		contact_name
		The name of the client to contact.

		client
		Information about the client to whom the contact log belongs.

		created_by
		Information about the staff member who created the contact log.

		assigned_to
		Information about the staff member to whom the contact log is assigned
		for follow up.

		comments
		The contact log’s comments.

		types
		Contains information about contact log types.
	"""

	input_map = {
		'Id': 'id',
		'Text': 'text',
		'CreatedDateTime': 'created_date_time',
		'FollowupByDate': 'followup_by_date',
		'ContactMethod': 'contact_method',
		'ContactName': 'contact_name',
		'Client': ('client', Client),
		'CreatedBy': ('created_by', Staff),
		'AssignedTo': ('assigned_to', Staff),
		'Comments': ['comments', ContactLogComment],
		'Types': ['types', ContactLogType],
		}

	output_map = {
		'id': 'Id',
		'text': 'Text',
		'created_date_time': 'CreatedDateTime',
		'followup_by_date': 'FollowupByDate',
		'contact_method': 'ContactMethod',
		'contact_name': 'ContactName',
		'client': 'Client',
		'created_by': 'CreatedBy',
		'assigned_to': 'AssignedTo',
		'comments': 'Comments',
		'types': 'Types',
		}

	id = None
	text = None
	created_date_time = None
	followup_by_date = None
	contact_method = None
	contact_name = None
	client = None
	created_by = None
	assigned_to = None
	comments = None
	types = None

