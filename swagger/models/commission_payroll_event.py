from .base_model import BaseModel


class CommissionPayrollEvent(BaseModel):
	"""
	no description available

	Attributes:

		staff_id
		The ID of the staff member who earned commissions.

		sale_date_time
		The date and time when the sale occurred.

		sale_id
		The sale’s ID.

		product_id
		The product ID of the item for which the staff earned commissions.

		earnings_details
		Contains information about which commissions the staff earned for this
		item.

		earnings
		The total commissions earned by the staff for this item.
	"""

	input_map = {
		'StaffId': 'staff_id',
		'SaleDateTime': 'sale_date_time',
		'SaleId': 'sale_id',
		'ProductId': 'product_id',
		'EarningsDetails': 'earnings_details',
		'Earnings': 'earnings',
		}

	output_map = {
		'staff_id': 'StaffId',
		'sale_date_time': 'SaleDateTime',
		'sale_id': 'SaleId',
		'product_id': 'ProductId',
		'earnings_details': 'EarningsDetails',
		'earnings': 'Earnings',
		}