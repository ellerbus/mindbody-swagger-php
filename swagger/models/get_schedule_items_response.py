from .base_model import BaseModel

from .pagination_response import PaginationResponse
from .staff import Staff

class GetScheduleItemsResponse(BaseModel):
	"""
	no description available

	Attributes:

		pagination_response
		Contains information about the pagination used.

		staff_members
		Contains information about staff members with schedule items.
	"""

	input_map = {
		'PaginationResponse': ('pagination_response', PaginationResponse),
		'StaffMembers': ['staff_members', Staff],
		}

	output_map = {
		'pagination_response': 'PaginationResponse',
		'staff_members': 'StaffMembers',
		}

	pagination_response = None
	staff_members = None

