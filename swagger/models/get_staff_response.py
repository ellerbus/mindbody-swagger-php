from .base_model import BaseModel

from .pagination_response import PaginationResponse

class GetStaffResponse(BaseModel):
	"""
	no description available

	Attributes:

		staff_members
		A list of staff members.
	"""

	input_map = {
		'PaginationResponse': ('pagination_response', PaginationResponse),
		'StaffMembers': 'staff_members',
		}

	output_map = {
		'pagination_response': 'PaginationResponse',
		'staff_members': 'StaffMembers',
		}