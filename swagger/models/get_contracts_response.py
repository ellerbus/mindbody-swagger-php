from .base_model import BaseModel

from .pagination_response import PaginationResponse
from .contract import Contract

class GetContractsResponse(BaseModel):
	"""
	no description available

	Attributes:

		pagination_response
		Contains information about the pagination used.

		contracts
		Contains information about each contract.
	"""

	input_map = {
		'PaginationResponse': ('pagination_response', PaginationResponse),
		'Contracts': ['contracts', Contract],
		}

	output_map = {
		'pagination_response': 'PaginationResponse',
		'contracts': 'Contracts',
		}

	pagination_response = None
	contracts = None

