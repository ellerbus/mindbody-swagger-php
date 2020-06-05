from .base_model import BaseModel

from .pagination_response import PaginationResponse

class GetActiveClientMembershipsResponse(BaseModel):
	"""
	no description available

	Attributes:

		pagination_response
		Contains information about the pagination used.

		client_memberships
		Details about the requested memberships.
	"""

	input_map = {
		'PaginationResponse': ('pagination_response', PaginationResponse)
		'ClientMemberships': 'client_memberships',
		}

	output_map = {
		'pagination_response': 'PaginationResponse',
		'client_memberships': 'ClientMemberships',
		}