from .base_model import BaseModel

from .client_contract import ClientContract
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
		'Contracts': ['contracts', ClientContract],
		'PaginationResponse': ('pagination_response', PaginationResponse),
		}

	output_map = {
		'contracts': 'Contracts',
		'pagination_response': 'PaginationResponse',
		}

	contracts = None
	pagination_response = None

