<?php

namespace App\MindBody\Models;

/**
 * no description available
 */
class StaffPermissionGroup extends BaseModel
{
	/**
	 * The name of the permission group.
	 * 
	 * @var string
	 */
	public $permissionGroupName;
	/**
	 * When `true`, the staff member’s permissions are restricted to
	 * specific IP addresses.<br />  When `false`, the staff member’s
	 * permissions are not restricted to specific IP addresses.
	 * 
	 * @var boolean
	 */
	public $ipRestricted;
	/**
	 * A list of the permissions allowed to the staff member. See [Permission
	 * Values](https://developers.mindbodyonline.com/PublicDocumentation/V6#e
	 * permission-values) for descriptions of the possible permissions.
	 * 
	 * @var string[]
	 */
	public $allowedPermissions;
	/**
	 * A list of the permissions that the staff member is not allowed to
	 * exercise. See [Permission Values](https://developers.mindbodyonline.co
	 * m/PublicDocumentation/V6#epermission-values) for descriptions of the
	 * possible permissions.
	 * 
	 * @var string[]
	 */
	public $deniedPermissions;
}
