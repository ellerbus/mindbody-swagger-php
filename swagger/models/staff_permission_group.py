from .base_model import BaseModel


class StaffPermissionGroup(BaseModel):
	"""
	no description available

	Attributes:

		permission_group_name
		The name of the permission group.

		ip_restricted
		When `true`, the staff member’s permissions are restricted to
		specific IP addresses.<br />  When `false`, the staff member’s
		permissions are not restricted to specific IP addresses.

		allowed_permissions
		A list of the permissions allowed to the staff member. See [Permission
		Values](https://developers.mindbodyonline.com/PublicDocumentation/V6#e
		permission-values) for descriptions of the possible permissions.

		denied_permissions
		A list of the permissions that the staff member is not allowed to
		exercise. See [Permission Values](https://developers.mindbodyonline.co
		m/PublicDocumentation/V6#epermission-values) for descriptions of the
		possible permissions.
	"""

	input_map = {
		'PermissionGroupName': 'permission_group_name',
		'IpRestricted': 'ip_restricted',
		'AllowedPermissions': 'allowed_permissions',
		'DeniedPermissions': 'denied_permissions',
		}

	output_map = {
		'permission_group_name': 'PermissionGroupName',
		'ip_restricted': 'IpRestricted',
		'allowed_permissions': 'AllowedPermissions',
		'denied_permissions': 'DeniedPermissions',
		}