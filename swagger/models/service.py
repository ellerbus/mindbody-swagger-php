from .base_model import BaseModel


class Service(BaseModel):
	"""
	no description available

	Attributes:

		price
		The cost of the pricing option when sold at a physical location.

		online_price
		The cost of the pricing option when sold online.

		tax_included
		The amount of tax included in the price, if inclusive pricing is
		enabled.

		program_id
		The ID of the program that this pricing option applies to.

		tax_rate
		The tax rate applied to the pricing option. This field is populated
		only when you include a `LocationID` in the request.

		product_id
		The unique ID of the pricing option.

		id
		The barcode ID of the pricing option.

		name
		The name of the pricing option.

		count
		The initial count of usages available for the pricing option.
	"""

	input_map = {
		'Price': 'price',
		'OnlinePrice': 'online_price',
		'TaxIncluded': 'tax_included',
		'ProgramId': 'program_id',
		'TaxRate': 'tax_rate',
		'ProductId': 'product_id',
		'Id': 'id',
		'Name': 'name',
		'Count': 'count',
		}

	output_map = {
		'price': 'Price',
		'online_price': 'OnlinePrice',
		'tax_included': 'TaxIncluded',
		'program_id': 'ProgramId',
		'tax_rate': 'TaxRate',
		'product_id': 'ProductId',
		'id': 'Id',
		'name': 'Name',
		'count': 'Count',
		}