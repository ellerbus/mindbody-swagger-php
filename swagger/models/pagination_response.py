from .base_model import BaseModel


class PaginationResponse(BaseModel):
	"""
	no description available

	Attributes:

		requested_limit
		Limit from pagination request

		requested_offset
		Offset from pagination request

		page_size
		Number of results returned in this response

		total_results
		Total number of results in dataset
	"""

	input_map = {
		'RequestedLimit': 'requested_limit',
		'RequestedOffset': 'requested_offset',
		'PageSize': 'page_size',
		'TotalResults': 'total_results',
		}

	output_map = {
		'requested_limit': 'RequestedLimit',
		'requested_offset': 'RequestedOffset',
		'page_size': 'PageSize',
		'total_results': 'TotalResults',
		}