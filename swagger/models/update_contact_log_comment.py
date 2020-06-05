from .base_model import BaseModel


class UpdateContactLogComment(BaseModel):
	"""
	no description available

	Attributes:

		id
		The ID of the contact log comment to be updated. Pass a value of `0`
		to add a new comment to the contact log.

		text
		The new text for the comment.
	"""

	input_map = {
		'Id': 'id',
		'Text': 'text',
		}

	output_map = {
		'id': 'Id',
		'text': 'Text',
		}