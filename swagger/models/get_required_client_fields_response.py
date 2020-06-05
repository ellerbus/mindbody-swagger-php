from .base_model import BaseModel


class GetRequiredClientFieldsResponse(BaseModel):
	"""
	no description available

	Attributes:

		required_client_fields
		A list of strings that maps to the client fields that are required by
		the site.
	"""

	input_map = {
		'RequiredClientFields': 'required_client_fields',
		}

	output_map = {
		'required_client_fields': 'RequiredClientFields',
		}