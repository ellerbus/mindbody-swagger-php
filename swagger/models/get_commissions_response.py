from .base_model import BaseModel

from .pagination_response import PaginationResponse
from .commission_payroll_event import CommissionPayrollEvent

class GetCommissionsResponse(BaseModel):
	"""
	no description available

	Attributes:

		pagination_response
		Contains information about the pagination used.

		commissions
		Contains information about commissions earned by staff for sales
		within the given date range. Results are ordered by `SaleId`, then by
		`StaffId`.
	"""

	input_map = {
		'PaginationResponse': ('pagination_response', PaginationResponse),
		'Commissions': ['commissions', CommissionPayrollEvent],
		}

	output_map = {
		'pagination_response': 'PaginationResponse',
		'commissions': 'Commissions',
		}

	pagination_response = None
	commissions = None

