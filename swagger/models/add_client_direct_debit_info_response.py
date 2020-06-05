from .base_model import BaseModel


class AddClientDirectDebitInfoResponse(BaseModel):
	"""
	no description available

	Attributes:

		client_id
		The ID of the client being updated

		name_on_account
		The name on the bank account being added

		routing_number
		The routing number of the bank account being added

		account_number
		The account number of the bank account being added

		account_type
		Either "Checking" or "Savings"
	"""

	input_map = {
		'ClientId': 'client_id',
		'NameOnAccount': 'name_on_account',
		'RoutingNumber': 'routing_number',
		'AccountNumber': 'account_number',
		'AccountType': 'account_type',
		}

	output_map = {
		'client_id': 'ClientId',
		'name_on_account': 'NameOnAccount',
		'routing_number': 'RoutingNumber',
		'account_number': 'AccountNumber',
		'account_type': 'AccountType',
		}