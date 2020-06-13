from .base_model import BaseModel

from .pagination_response import PaginationResponse

class GetScheduledServiceEarningsResponse(BaseModel):
	"""
	no description available

	Attributes:

		pagination_response
		Contains information about the pagination used.

		scheduled_service_earnings
		Contains the class payroll events.
	"""

	input_map = {
		'PaginationResponse': ('pagination_response', PaginationResponse),
		'ScheduledServiceEarnings': 'scheduled_service_earnings',
		}

	output_map = {
		'pagination_response': 'PaginationResponse',
		'scheduled_service_earnings': 'ScheduledServiceEarnings',
		}

	pagination_response = None
	scheduled_service_earnings = None

