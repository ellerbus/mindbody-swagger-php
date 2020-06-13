from .base_model import BaseModel

from .staff_permission_group import StaffPermissionGroup

class GetStaffPermissionsResponse(BaseModel):
	"""
	no description available

	Attributes:

		user_group
		Contains information about the requested staff member’s permission
		group.
	"""

	input_map = {
		'UserGroup': ('user_group', UserGroup),
		}

	output_map = {
		'user_group': 'UserGroup',
		}

		'UserGroup': ('user_group', UserGroup),

