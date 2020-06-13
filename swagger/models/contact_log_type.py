from .base_model import BaseModel

from .contact_log_sub_type import ContactLogSubType

class ContactLogType(BaseModel):
	"""
	A contact log type.

	Attributes:

		id
		The contact log type’s ID.

		sub_types
		A list of the subtypes being used to tag this contact log type.
	"""

	input_map = {
		'Id': 'id',
		'SubTypes': ['sub_types', ContactLogSubType],
		}

	output_map = {
		'id': 'Id',
		'sub_types': 'SubTypes',
		}

	id = None
	sub_types = None

