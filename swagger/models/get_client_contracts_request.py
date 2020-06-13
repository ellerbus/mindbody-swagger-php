from .base_model import BaseModel


class GetClientContractsRequest(BaseModel):
	"""
	no description available

	Attributes:

		client_id
		The ID of the client.

		cross_regional_lookup
		When `true`, indicates that the requesting client’s cross regional
		contracts are returned, if any.<br />  When `false`, indicates that
		cross regional contracts are not returned.

		client_associated_sites_offset
		Determines how many sites are skipped over when retrieving a
		client’s cross regional contracts. Used when a client ID is linked
		to more than ten sites in an organization. Only a maximum of ten site
		databases are queried when this call is made and `CrossRegionalLookup`
		is set to `true`. To change which sites are queried, change this
		offset value.  Default: **0**

		limit
		Number of results to include, defaults to 100

		offset
		Page offset, defaults to 0.
	"""

	input_map = {
		'ClientId': 'client_id',
		'CrossRegionalLookup': 'cross_regional_lookup',
		'ClientAssociatedSitesOffset': 'client_associated_sites_offset',
		'Limit': 'limit',
		'Offset': 'offset',
		}

	output_map = {
		'client_id': 'ClientId',
		'cross_regional_lookup': 'CrossRegionalLookup',
		'client_associated_sites_offset': 'ClientAssociatedSitesOffset',
		'limit': 'Limit',
		'offset': 'Offset',
		}

	client_id = None
	cross_regional_lookup = None
	client_associated_sites_offset = None
	limit = None
	offset = None



	def __init__(self, client_id):
		self.client_id = client_id
