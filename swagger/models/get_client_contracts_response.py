from .base_model import BaseModel

from .pagination_response import PaginationResponse

class GetClientContractsResponse(BaseModel):
	"""
	no description available

	Attributes:

		contracts
		Contains the details of the client’s contract.

		pagination_response
		Contains information about the pagination used.
	"""

	input_map = {
		'Contracts': 'contracts',
		'PaginationResponse': ('pagination_response', PaginationResponse)
		}

	output_map = {
		'contracts': 'Contracts',
		'pagination_response': 'PaginationResponse',
		}