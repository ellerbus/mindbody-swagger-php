from .base_model import BaseModel


class CreditCardInfo(BaseModel):
	"""
	INformation about an individual credit card

	Attributes:
	"""

	input_map = {
		'CreditCardNumber': 'credit_card_number',
		'ExpMonth': 'exp_month',
		'ExpYear': 'exp_year',
		'BillingName': 'billing_name',
		'BillingAddress': 'billing_address',
		'BillingCity': 'billing_city',
		'BillingState': 'billing_state',
		'BillingPostalCode': 'billing_postal_code',
		'SaveInfo': 'save_info',
		}

	output_map = {
		'credit_card_number': 'CreditCardNumber',
		'exp_month': 'ExpMonth',
		'exp_year': 'ExpYear',
		'billing_name': 'BillingName',
		'billing_address': 'BillingAddress',
		'billing_city': 'BillingCity',
		'billing_state': 'BillingState',
		'billing_postal_code': 'BillingPostalCode',
		'save_info': 'SaveInfo',
		}