from .base_model import BaseModel


class Package(BaseModel):
	"""
	no description available

	Attributes:

		id
		The ID of the package.

		name
		The name of the package.

		discount_percentage
		The discount percentage applied to the package.

		sell_online
		When `true`, only products that can be sold online are returned.<br />
		When `false`, all products are returned.

		services
		Information about the services in the packages.

		products
		Information about the products in the packages.
	"""

	input_map = {
		'Id': 'id',
		'Name': 'name',
		'DiscountPercentage': 'discount_percentage',
		'SellOnline': 'sell_online',
		'Services': 'services',
		'Products': 'products',
		}

	output_map = {
		'id': 'Id',
		'name': 'Name',
		'discount_percentage': 'DiscountPercentage',
		'sell_online': 'SellOnline',
		'services': 'Services',
		'products': 'Products',
		}

	id = None
	name = None
	discount_percentage = None
	sell_online = None
	services = None
	products = None

