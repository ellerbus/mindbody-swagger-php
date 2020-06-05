from .base_model import BaseModel


class GetClientPurchasesRequest(BaseModel):
	"""
	no description available

	Attributes:

		client_id
		The ID of the client you are querying for purchases.

		start_date
		Filters results to purchases made on or after this timestamp.<br />
		Default: **now**

		end_date
		Filters results to purchases made before this timestamp.<br />
		Default: **end of today**

		sale_id
		Filters results to the single record associated with this ID.

		limit
		Number of results to include, defaults to 100

		offset
		Page offset, defaults to 0.
	"""

	input_map = {
		'ClientId': 'client_id',
		'StartDate': 'start_date',
		'EndDate': 'end_date',
		'SaleId': 'sale_id',
		'Limit': 'limit',
		'Offset': 'offset',
		}

	output_map = {
		'client_id': 'ClientId',
		'start_date': 'StartDate',
		'end_date': 'EndDate',
		'sale_id': 'SaleId',
		'limit': 'Limit',
		'offset': 'Offset',
		}	def __init__(self, client_id):
		self.client_id = client_id
