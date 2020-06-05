from .base_model import BaseModel


class CommissionDetail(BaseModel):
	"""
	no description available

	Attributes:

		commission_type
		The type of commission earned. Possible values are:  *
		ItemStandardPercentageCommission  * ItemStandardFlatCommission  *
		ItemPromotionalPercentageCommission  * ItemPromotionalFlatCommission
		* StaffStandardPercentageCommission  * StaffStandardFlatCommission  *
		StaffPromotionalPercentageCommission  * StaffPromotionalFlatCommission

		commission_earnings
		The portion of `Earnings` earned by this `CommissionType`.
	"""

	input_map = {
		'CommissionType': 'commission_type',
		'CommissionEarnings': 'commission_earnings',
		}

	output_map = {
		'commission_type': 'CommissionType',
		'commission_earnings': 'CommissionEarnings',
		}