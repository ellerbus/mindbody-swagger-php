from .base_model import BaseModel


class CrossRegionalClientAssociation(BaseModel):
	"""
	A client cross region association

	Attributes:

		site_id
		The ID of the site to which the client belongs.

		client_id
		The client’s RSSID.

		unique_id
		The client’s unique ID.
	"""

	input_map = {
		'SiteId': 'site_id',
		'ClientId': 'client_id',
		'UniqueId': 'unique_id',
		}

	output_map = {
		'site_id': 'SiteId',
		'client_id': 'ClientId',
		'unique_id': 'UniqueId',
		}