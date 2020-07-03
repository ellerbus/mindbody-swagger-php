<?php

namespace App\Mindbody\Apis;

use App\Mindbody\Models\GetStaffRequest;
use App\Mindbody\Models\GetStaffResponse;
use App\Mindbody\Models\GetStaffPermissionsRequest;
use App\Mindbody\Models\GetStaffPermissionsResponse;

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
	public function getStaff($request)
	{
		$url = $this->getFullPath('staff');

		return $this->client->get($url, $request, GetStaffResponse::class);
	}

	/**
	 * Get configured staff permissions for a staff member.
	 */
	public function getStaffPermissions($request)
	{
		$url = $this->getFullPath('staffpermissions');

		return $this->client->get($url, $request, GetStaffPermissionsResponse::class);
	}

}
