from .base_model import BaseModel


class GetClassVisitsRequest(BaseModel):
	"""
	no description available

	Attributes:

		class_id
		The class ID.

		last_modified_date
		When included in the request, only records modified on or after the
		`LastModifiedDate` specified are included in the response.
	"""

	input_map = {
		'ClassID': 'class_id',
		'LastModifiedDate': 'last_modified_date',
		}

	output_map = {
		'class_id': 'ClassID',
		'last_modified_date': 'LastModifiedDate',
		}