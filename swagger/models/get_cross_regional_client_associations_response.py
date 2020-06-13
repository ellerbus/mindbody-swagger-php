from .base_model import BaseModel

from .pagination_response import PaginationResponse

class GetCrossRegionalClientAssociationsResponse(BaseModel):
	"""
	no description available

	Attributes:

		pagination_response
		Contains information about the pagination used.

		cross_regional_client_associations
		Contains information about the client’s cross regional associations.
	"""

	input_map = {
		'PaginationResponse': ('pagination_response', PaginationResponse),
		'CrossRegionalClientAssociations': 'cross_regional_client_associations',
		}

	output_map = {
		'pagination_response': 'PaginationResponse',
		'cross_regional_client_associations': 'CrossRegionalClientAssociations',
		}

	pagination_response = None
	cross_regional_client_associations = None

