<?php

namespace App\MindBody\Apis;

use App\MindBody\Models\GetStaffRequest;
use App\MindBody\Models\GetStaffResponse;
use App\MindBody\Models\GetStaffPermissionsRequest;
use App\MindBody\Models\GetStaffPermissionsResponse;

class StaffApi extends BaseApi
{
	/**
	 * Constructor
	 */
	public function __construct($siteId, $authorization)
	{
		parent::__construct('staff', $siteId, $authorization);
	}

	/**
	 * Get staff members at a site.
	 */
	public function GetStaff($request)
	{
		$url = $this->getFullPath('staff');

		return $this->client->get($url, $request, GetStaffResponse::class);
	}

	/**
	 * Get configured staff permissions for a staff member.
	 */
	public function GetStaffPermissions($request)
	{
		$url = $this->getFullPath('staffpermissions');

		return $this->client->get($url, $request, GetStaffPermissionsResponse::class);
	}

}
