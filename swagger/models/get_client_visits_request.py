from .base_model import BaseModel


class GetClientVisitsRequest(BaseModel):
	"""
	no description available

	Attributes:

		client_id
		The ID of the requested client.

		client_associated_sites_offset
		The number of sites to skip when returning the site associated with a
		client.

		cross_regional_lookup
		When `true`, indicates that past and scheduled client visits across
		all sites in the region are returned.<br />  When `false`, indicates
		that only visits at the current site are returned.

		end_date
		The date past which class visits are not returned.  Default:
		**today’s date**

		start_date
		The date before which class visits are not returned.  Default: **the
		end date**

		unpaids_only
		When `true`, indicates that only visits that have not been paid for
		are returned.<br />  When `false`, indicates that all visits are
		returned, regardless of whether they have been paid for.<br />
		Default: **false**

		limit
		Number of results to include, defaults to 100

		offset
		Page offset, defaults to 0.
	"""

	input_map = {
		'ClientId': 'client_id',
		'ClientAssociatedSitesOffset': 'client_associated_sites_offset',
		'CrossRegionalLookup': 'cross_regional_lookup',
		'EndDate': 'end_date',
		'StartDate': 'start_date',
		'UnpaidsOnly': 'unpaids_only',
		'Limit': 'limit',
		'Offset': 'offset',
		}

	output_map = {
		'client_id': 'ClientId',
		'client_associated_sites_offset': 'ClientAssociatedSitesOffset',
		'cross_regional_lookup': 'CrossRegionalLookup',
		'end_date': 'EndDate',
		'start_date': 'StartDate',
		'unpaids_only': 'UnpaidsOnly',
		'limit': 'Limit',
		'offset': 'Offset',
		}

	def __init__(self, client_id):
		self.client_id = client_id
