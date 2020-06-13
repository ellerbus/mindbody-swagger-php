from .base_model import BaseModel


class GetContractsRequest(BaseModel):
	"""
	no description available

	Attributes:

		contract_ids
		When included, the response only contains details about the specified
		contract IDs.

		sold_online
		When `true`, the response only contains details about contracts and
		AutoPay options that can be sold online.<br />  When `false`, only
		contracts that are not intended to be sold online are returned.<br />
		Default: **all contracts**

		location_id
		The ID of the location that has the requested contracts and AutoPay
		options.

		consumer_id
		The ID of the client.

		limit
		Number of results to include, defaults to 100

		offset
		Page offset, defaults to 0.
	"""

	input_map = {
		'ContractIds': 'contract_ids',
		'SoldOnline': 'sold_online',
		'LocationId': 'location_id',
		'ConsumerId': 'consumer_id',
		'Limit': 'limit',
		'Offset': 'offset',
		}

	output_map = {
		'contract_ids': 'ContractIds',
		'sold_online': 'SoldOnline',
		'location_id': 'LocationId',
		'consumer_id': 'ConsumerId',
		'limit': 'Limit',
		'offset': 'Offset',
		}

	contract_ids = None
	sold_online = None
	location_id = None
	consumer_id = None
	limit = None
	offset = None



	def __init__(self, location_id):
		self.location_id = location_id
