<?php

namespace App\MindBody\Models;

/**
 * no description available
 */
class GetStaffPermissionsResponse extends BaseModel
{
	/**
	 * Contains information about the requested staff member’s permission
	 * group.
	 * 
	 * @var StaffPermissionGroup
	 */
	public $userGroup;
}
