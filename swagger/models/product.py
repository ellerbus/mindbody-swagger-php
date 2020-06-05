from .base_model import BaseModel

from .color import Color
from .size import Size

class Product(BaseModel):
	"""
	no description available

	Attributes:

		price
		The price of the product.

		tax_included
		If tax inclusive-pricing is enabled, this field shows how much tax was
		added to the price.

		tax_rate
		The tax rate that was applied to this purchase.

		id
		The unique ID of the product variant, for example, a particular size
		and color combination.

		group_id
		The unique ID of the product group.

		name
		The name of the product.

		online_price
		The online price of the product.

		short_description
		A short description of the product.

		long_description
		A longer description of the product.

		color
		The color of the product.

		size
		Contains information about the size of the product.
	"""

	input_map = {
		'Price': 'price',
		'TaxIncluded': 'tax_included',
		'TaxRate': 'tax_rate',
		'Id': 'id',
		'GroupId': 'group_id',
		'Name': 'name',
		'OnlinePrice': 'online_price',
		'ShortDescription': 'short_description',
		'LongDescription': 'long_description',
		'Color': ('color', Color)
		'Size': ('size', Size)
		}

	output_map = {
		'price': 'Price',
		'tax_included': 'TaxIncluded',
		'tax_rate': 'TaxRate',
		'id': 'Id',
		'group_id': 'GroupId',
		'name': 'Name',
		'online_price': 'OnlinePrice',
		'short_description': 'ShortDescription',
		'long_description': 'LongDescription',
		'color': 'Color',
		'size': 'Size',
		}