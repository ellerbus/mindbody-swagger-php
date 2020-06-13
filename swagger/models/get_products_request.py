from .base_model import BaseModel


class GetProductsRequest(BaseModel):
	"""
	no description available

	Attributes:

		product_ids
		An ID filter for products.

		search_text
		A search filter, used for searching by term.

		category_ids
		A list of category IDs to filter by.

		sub_category_ids
		A list of subcategory IDs to filter by.

		sell_online
		When `true`, only products that can be sold online are returned.<br />
		When `false`, all products are returned.<br />  Default: **false**

		location_id
		The location ID to use to determine the tax for the products that this
		request returns.<br />  Default: **online store**

		limit
		Number of results to include, defaults to 100

		offset
		Page offset, defaults to 0.
	"""

	input_map = {
		'ProductIds': 'product_ids',
		'SearchText': 'search_text',
		'CategoryIds': 'category_ids',
		'SubCategoryIds': 'sub_category_ids',
		'SellOnline': 'sell_online',
		'LocationId': 'location_id',
		'Limit': 'limit',
		'Offset': 'offset',
		}

	output_map = {
		'product_ids': 'ProductIds',
		'search_text': 'SearchText',
		'category_ids': 'CategoryIds',
		'sub_category_ids': 'SubCategoryIds',
		'sell_online': 'SellOnline',
		'location_id': 'LocationId',
		'limit': 'Limit',
		'offset': 'Offset',
		}

	product_ids = None
	search_text = None
	category_ids = None
	sub_category_ids = None
	sell_online = None
	location_id = None
	limit = None
	offset = None

