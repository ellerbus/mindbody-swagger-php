from .base_model import BaseModel


class PurchaseContractResponse(BaseModel):
	"""
	no description available

	Attributes:

		client_id
		The ID of the client who is purchasing the contract.

		location_id
		The ID of the location where the contract is being purchased.

		contract_id
		The ID of the general contract being purchased.

		client_contract_id
		The ID of the specific contract being purchased by this specific
		client, not to be confused with the `ContractId`, which refers to a
		general contract that the business offers.
	"""

	input_map = {
		'ClientId': 'client_id',
		'LocationId': 'location_id',
		'ContractId': 'contract_id',
		'ClientContractId': 'client_contract_id',
		}

	output_map = {
		'client_id': 'ClientId',
		'location_id': 'LocationId',
		'contract_id': 'ContractId',
		'client_contract_id': 'ClientContractId',
		}

	client_id = None
	location_id = None
	contract_id = None
	client_contract_id = None

