from .base_model import BaseModel


class GetGiftCardsRequest(BaseModel):
	"""
	no description available

	Attributes:

		location_id
		When included, returns gift cards that are sold at the provided
		location ID.

		sold_online
		When `true`, only returns gift cards that are sold online.<br />
		Default: **false**

		ids
		Filters the results to the requested gift card IDs.<br />  Default:
		**all** gift cards.

		limit
		Number of results to include, defaults to 100

		offset
		Page offset, defaults to 0.
	"""

	input_map = {
		'LocationId': 'location_id',
		'SoldOnline': 'sold_online',
		'Ids': 'ids',
		'Limit': 'limit',
		'Offset': 'offset',
		}

	output_map = {
		'location_id': 'LocationId',
		'sold_online': 'SoldOnline',
		'ids': 'Ids',
		'limit': 'Limit',
		'offset': 'Offset',
		}

	location_id = None
	sold_online = None
	ids = None
	limit = None
	offset = None

