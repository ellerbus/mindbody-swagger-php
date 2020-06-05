from .base_model import BaseModel


class GetLocationsRequest(BaseModel):
	"""
	no description available

	Attributes:

		limit
		Number of results to include, defaults to 100

		offset
		Page offset, defaults to 0.
	"""

	input_map = {
		'Limit': 'limit',
		'Offset': 'offset',
		}

	output_map = {
		'limit': 'Limit',
		'offset': 'Offset',
		}