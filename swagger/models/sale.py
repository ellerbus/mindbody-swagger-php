from .base_model import BaseModel


class Sale(BaseModel):
	"""
	no description available

	Attributes:

		id
		The sale ID.

		sale_date
		The date the item was sold.

		sale_time
		The time the item was sold.

		sale_date_time
		The date and time the item was sold.

		client_id
		The ID of the client who made the purchase.

		purchased_items
		Contains information that describes the purchased items.

		location_id
		The ID of the location where the sale takes place.

		payments
		Contains information that describes the payments that contributed to
		this sale.
	"""

	input_map = {
		'Id': 'id',
		'SaleDate': 'sale_date',
		'SaleTime': 'sale_time',
		'SaleDateTime': 'sale_date_time',
		'ClientId': 'client_id',
		'PurchasedItems': 'purchased_items',
		'LocationId': 'location_id',
		'Payments': 'payments',
		}

	output_map = {
		'id': 'Id',
		'sale_date': 'SaleDate',
		'sale_time': 'SaleTime',
		'sale_date_time': 'SaleDateTime',
		'client_id': 'ClientId',
		'purchased_items': 'PurchasedItems',
		'location_id': 'LocationId',
		'payments': 'Payments',
		}

	id = None
	sale_date = None
	sale_time = None
	sale_date_time = None
	client_id = None
	purchased_items = None
	location_id = None
	payments = None

