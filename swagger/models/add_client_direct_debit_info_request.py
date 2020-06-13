from .base_model import BaseModel


class AddClientDirectDebitInfoRequest(BaseModel):
	"""
	no description available

	Attributes:

		test
		A value of true performs a dry run exectuion

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
		'Test': 'test',
		'ClientId': 'client_id',
		'NameOnAccount': 'name_on_account',
		'RoutingNumber': 'routing_number',
		'AccountNumber': 'account_number',
		'AccountType': 'account_type',
		}

	output_map = {
		'test': 'Test',
		'client_id': 'ClientId',
		'name_on_account': 'NameOnAccount',
		'routing_number': 'RoutingNumber',
		'account_number': 'AccountNumber',
		'account_type': 'AccountType',
		}

	test = None
	client_id = None
	name_on_account = None
	routing_number = None
	account_number = None
	account_type = None

