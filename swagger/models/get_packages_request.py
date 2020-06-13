from .base_model import BaseModel


class GetPackagesRequest(BaseModel):
	"""
	no description available

	Attributes:

		package_ids
		A list of the packages IDs to filter by.

		sell_online
		When `true`, only returns products that can be sold online.<br />
		When `false`, all products are returned.<br />  Default: **false**

		limit
		Number of results to include, defaults to 100

		offset
		Page offset, defaults to 0.
	"""

	input_map = {
		'PackageIds': 'package_ids',
		'SellOnline': 'sell_online',
		'Limit': 'limit',
		'Offset': 'offset',
		}

	output_map = {
		'package_ids': 'PackageIds',
		'sell_online': 'SellOnline',
		'limit': 'Limit',
		'offset': 'Offset',
		}

	package_ids = None
	sell_online = None
	limit = None
	offset = None

