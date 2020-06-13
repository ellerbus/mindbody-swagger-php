from .base_model import BaseModel


class GetStaffPermissionsRequest(BaseModel):
	"""
	no description available

	Attributes:

		staff_id
		The ID of the staff member whose permissions you want to return.
	"""

	input_map = {
		'StaffId': 'staff_id',
		}

	output_map = {
		'staff_id': 'StaffId',
		}

	staff_id = None



	def __init__(self, staff_id):
		self.staff_id = staff_id
