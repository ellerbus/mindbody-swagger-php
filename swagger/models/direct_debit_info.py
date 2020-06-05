from .base_model import BaseModel


class DirectDebitInfo(BaseModel):
	"""
	no description available

	Attributes:

		name_on_account
		The name on the bank account.

		routing_number
		The routing number for the bank.

		account_number
		The bank account number.

		account_type
		The account type. Either Checking or Savings.
	"""

	input_map = {
		'NameOnAccount': 'name_on_account',
		'RoutingNumber': 'routing_number',
		'AccountNumber': 'account_number',
		'AccountType': 'account_type',
		}

	output_map = {
		'name_on_account': 'NameOnAccount',
		'routing_number': 'RoutingNumber',
		'account_number': 'AccountNumber',
		'account_type': 'AccountType',
		}