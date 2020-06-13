from .base_model import BaseModel


class AutopaySchedule(BaseModel):
	"""
	no description available

	Attributes:

		frequency_type
		Defines how often clients are charged. Possible values are:  *
		SetNumberOfAutopays  * MonthToMonth

		frequency_value
		The interval of AutoPay frequency, combined with `FrequencyTimeUnit`.
		This value is null if `FrequencyType` is `MonthToMonth`.

		frequency_time_unit
		Defines the time unit that sets how often to run the AutoPay, combined
		with `FrequencyValue`. This value is null if `FrequencyType` is
		`MonthToMonth`. Possible values are:  * Weekly  * Monthly  * Yearly
	"""

	input_map = {
		'FrequencyType': 'frequency_type',
		'FrequencyValue': 'frequency_value',
		'FrequencyTimeUnit': 'frequency_time_unit',
		}

	output_map = {
		'frequency_type': 'FrequencyType',
		'frequency_value': 'FrequencyValue',
		'frequency_time_unit': 'FrequencyTimeUnit',
		}

	frequency_type = None
	frequency_value = None
	frequency_time_unit = None

