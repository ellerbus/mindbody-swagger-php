from .base_model import BaseModel


class GetClientAccountBalancesRequest(BaseModel):
	"""
	no description available

	Attributes:

		balance_date
		The date you want a balance relative to.   Default: **the current
		date**

		class_id
		The class ID of the event for which you want a balance.

		client_ids
		The list of clients IDs for which you want account balances.

		limit
		Number of results to include, defaults to 100

		offset
		Page offset, defaults to 0.
	"""

	input_map = {
		'BalanceDate': 'balance_date',
		'ClassId': 'class_id',
		'ClientIds': 'client_ids',
		'Limit': 'limit',
		'Offset': 'offset',
		}

	output_map = {
		'balance_date': 'BalanceDate',
		'class_id': 'ClassId',
		'client_ids': 'ClientIds',
		'limit': 'Limit',
		'offset': 'Offset',
		}	def __init__(self, client_ids):
		self.client_ids = client_ids
