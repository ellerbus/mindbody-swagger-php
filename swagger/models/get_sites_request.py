from .base_model import BaseModel


class GetSitesRequest(BaseModel):
	"""
	no description available

	Attributes:

		site_ids
		List of the requested site IDs. When omitted, returns all sites that
		the source has access to.

		limit
		Number of results to include, defaults to 100

		offset
		Page offset, defaults to 0.
	"""

	input_map = {
		'SiteIds': 'site_ids',
		'Limit': 'limit',
		'Offset': 'offset',
		}

	output_map = {
		'site_ids': 'SiteIds',
		'limit': 'Limit',
		'offset': 'Offset',
		}