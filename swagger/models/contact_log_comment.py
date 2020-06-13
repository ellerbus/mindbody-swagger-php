from .base_model import BaseModel

from .staff import Staff

class ContactLogComment(BaseModel):
	"""
	A contact log comment.

	Attributes:

		id
		The comment’s ID.

		text
		The comment’s body text.

		created_date_time
		The local time when the comment was created.

		created_by
		Information about the staff member who created the comment.
	"""

	input_map = {
		'Id': 'id',
		'Text': 'text',
		'CreatedDateTime': 'created_date_time',
		'CreatedBy': ('created_by', Staff),
		}

	output_map = {
		'id': 'Id',
		'text': 'Text',
		'created_date_time': 'CreatedDateTime',
		'created_by': 'CreatedBy',
		}

	id = None
	text = None
	created_date_time = None
	created_by = None

