from .base_model import BaseModel


class GetActiveClientMembershipsRequest(BaseModel):
	"""
	no description available

	Attributes:

		client_id
		The ID of the client whose membership was requested.

		location_id
		The ID of the location where the requested membership was created.

		cross_regional_lookup
		Used to retrieve a client’s memberships from multiple sites within
		an organization. When included and set to `true`, it searches a
		maximum of ten sites with which this client is associated. When a
		client is associated with more than ten sites, use
		`ClientAssociatedSitesOffset` as many times as needed to search the
		additional sites with which the client is associated. You can use the
		`CrossRegionalClientAssociations` value from `GET
		CrossRegionalClientAssociations` to determine how many sites the
		client is associated with. Note that a `SiteID` is returned and
		populated in the `ClientServices` response when `CrossRegionalLookup`
		is set to `true`.  Default: **false**

		client_associated_sites_offset
		Used to retrieve a client’s memberships from multiple sites within
		an organization when the client is associated with more than ten
		sites. To change which ten sites are searched, change this offset
		value. A value of 0 means that no sites are skipped and the first ten
		sites are returned. You can use the `CrossRegionalClientAssociations`
		value from `GET CrossRegionalClientAssociations` to determine how many
		sites the client is associated with. Note that you must always have
		`CrossRegionalLookup` set to `true` to use this parameter.<br />
		Default: **0**    For example, if a client is associated with 25
		sites, you need to call `GetClientServices` three times, as follows:
		* Use `GET CrossRegionalClientAssociations` to determine how many
		sites a client is associated with, which tells you how many additional
		calls you need to make.  * Either omit `ClientAssociatedSitesOffset`
		or set it to 0 to return the client’s services (pricing options)
		from sites 1-10.  * Set `ClientAssociatedSitesOffset` to 10 to return
		the client pricing options from sites 11-20  * Set
		`ClientAssociatedSitesOffset` to 20 to return the client pricing
		options from sites 21-25

		limit
		Number of results to include, defaults to 100

		offset
		Page offset, defaults to 0.
	"""

	input_map = {
		'ClientId': 'client_id',
		'LocationId': 'location_id',
		'CrossRegionalLookup': 'cross_regional_lookup',
		'ClientAssociatedSitesOffset': 'client_associated_sites_offset',
		'Limit': 'limit',
		'Offset': 'offset',
		}

	output_map = {
		'client_id': 'ClientId',
		'location_id': 'LocationId',
		'cross_regional_lookup': 'CrossRegionalLookup',
		'client_associated_sites_offset': 'ClientAssociatedSitesOffset',
		'limit': 'Limit',
		'offset': 'Offset',
		}

	client_id = None
	location_id = None
	cross_regional_lookup = None
	client_associated_sites_offset = None
	limit = None
	offset = None



	def __init__(self, client_id):
		self.client_id = client_id
