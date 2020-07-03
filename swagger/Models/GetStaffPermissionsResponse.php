<?php

namespace App\Mindbody\Models;

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

	protected function getInputMap()
	{
		return [
			'UserGroup' => ['userGroup', StaffPermissionGroup::class, null],
			];
	}

	protected function getOutputMap()
	{
		return [
			'userGroup' => ['UserGroup', StaffPermissionGroup::class, null],
			];
	}
}
