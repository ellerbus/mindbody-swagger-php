from .base_model import BaseModel


class ClientCreditCard(BaseModel):
	"""
	A client credit card.

	Attributes:

		address
		The billing address for the credit card.

		card_holder
		The name of the card holder.

		card_number
		The credit card number.

		card_type
		The type of credit card, for example Visa or MasterCard.

		city
		The city in which the billing address is located.

		exp_month
		The month in which the credit card expires.

		exp_year
		The year in which the credit card expires.

		last_four
		The last four digits of the credit card number.

		postal_code
		The postal code where the billing address is located.

		state
		The state that the billing address is located in.
	"""

	input_map = {
		'Address': 'address',
		'CardHolder': 'card_holder',
		'CardNumber': 'card_number',
		'CardType': 'card_type',
		'City': 'city',
		'ExpMonth': 'exp_month',
		'ExpYear': 'exp_year',
		'LastFour': 'last_four',
		'PostalCode': 'postal_code',
		'State': 'state',
		}

	output_map = {
		'address': 'Address',
		'card_holder': 'CardHolder',
		'card_number': 'CardNumber',
		'card_type': 'CardType',
		'city': 'City',
		'exp_month': 'ExpMonth',
		'exp_year': 'ExpYear',
		'last_four': 'LastFour',
		'postal_code': 'PostalCode',
		'state': 'State',
		}