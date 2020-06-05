from .base_model import BaseModel


class ContractItem(BaseModel):
	"""
	no description available

	Attributes:

		id
		The ID of the item.

		name
		The name of the item.

		description
		A description of the item.

		type
		The type of the item.

		price
		The price of the item.

		quantity
		The quantity of the item.

		one_time_item
		When `true`, indicates that the item is charged only once.<br />  When
		`false`, indicates that the item is charged multiple times.
	"""

	input_map = {
		'Id': 'id',
		'Name': 'name',
		'Description': 'description',
		'Type': 'type',
		'Price': 'price',
		'Quantity': 'quantity',
		'OneTimeItem': 'one_time_item',
		}

	output_map = {
		'id': 'Id',
		'name': 'Name',
		'description': 'Description',
		'type': 'Type',
		'price': 'Price',
		'quantity': 'Quantity',
		'one_time_item': 'OneTimeItem',
		}