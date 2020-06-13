from .base_model import BaseModel


class UpcomingAutopayEvent(BaseModel):
	"""
	no description available

	Attributes:

		client_contract_id
		The ID of the contract.

		charge_amount
		The amount charged.

		payment_method
		The payment method.

		schedule_date
		The date and time of the next payment.
	"""

	input_map = {
		'ClientContractId': 'client_contract_id',
		'ChargeAmount': 'charge_amount',
		'PaymentMethod': 'payment_method',
		'ScheduleDate': 'schedule_date',
		}

	output_map = {
		'client_contract_id': 'ClientContractId',
		'charge_amount': 'ChargeAmount',
		'payment_method': 'PaymentMethod',
		'schedule_date': 'ScheduleDate',
		}

	client_contract_id = None
	charge_amount = None
	payment_method = None
	schedule_date = None

