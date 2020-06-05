from .base_model import BaseModel


class Tip(BaseModel):
	"""
	no description available

	Attributes:

		staff_id
		The ID of the staff member the tip is for.

		sale_id
		The sale’s ID associated with the tip.

		sale_date_time
		The date and time when the tip was given.

		earnings
		The amount tipped to the staff member.
	"""

	input_map = {
		'StaffId': 'staff_id',
		'SaleId': 'sale_id',
		'SaleDateTime': 'sale_date_time',
		'Earnings': 'earnings',
		}

	output_map = {
		'staff_id': 'StaffId',
		'sale_id': 'SaleId',
		'sale_date_time': 'SaleDateTime',
		'earnings': 'Earnings',
		}