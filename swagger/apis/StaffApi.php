<?php

namespace App\MindBody\Clients;

use App\MindBody\Models\GetStaffRequest;
use App\MindBody\Models\GetStaffResponse;
use App\MindBody\Models\GetStaffPermissionsRequest;
use App\MindBody\Models\GetStaffPermissionsResponse;

class StaffApi extends BaseApi
{
	/*
	 * Constructor
	 */
	public function __construct($siteId, $authorization)
	{
		parent::__construct('staff', $siteId, $authorization);
	}

	/*
	 * Get staff members at a site.
	 */
	public function GetStaff($request)
	{
		$url = $this->getFullPath('staff');
		$siteId = $this->siteId;
		$auth = $this->authorization;

		return $this->client->get($url, $siteId, $auth, $request, GetStaffResponse::class);
	}

	/*
	 * Get configured staff permissions for a staff member.
	 */
	public function GetStaffPermissions($request)
	{
		$url = $this->getFullPath('staffpermissions');
		$siteId = $this->siteId;
		$auth = $this->authorization;

		return $this->client->get($url, $siteId, $auth, $request, GetStaffPermissionsResponse::class);
	}

}
