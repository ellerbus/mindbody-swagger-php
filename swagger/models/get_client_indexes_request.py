from .base_model import BaseModel


class GetClientIndexesRequest(BaseModel):
	"""
	no description available

	Attributes:

		required_only
		When `true`, filters the results to only indexes that are required on
		creation.<br />  When `false` or omitted, returns all of the client
		indexes.
	"""

	input_map = {
		'RequiredOnly': 'required_only',
		}

	output_map = {
		'required_only': 'RequiredOnly',
		}