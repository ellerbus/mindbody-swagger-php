<?php

namespace App\MindBody\Apis;

use App\MindBody\Models\GetSitesRequest;
use App\MindBody\Models\GetSitesResponse;
use App\MindBody\Models\GetSessionTypesRequest;
use App\MindBody\Models\GetSessionTypesResponse;
use App\MindBody\Models\GetLocationsRequest;
use App\MindBody\Models\GetLocationsResponse;
use App\MindBody\Models\GetProgramsRequest;
use App\MindBody\Models\GetProgramsResponse;
use App\MindBody\Models\GetResourcesRequest;
use App\MindBody\Models\GetResourcesResponse;
use App\MindBody\Models\GetActivationCodeResponse;
use App\MindBody\Models\GetMembershipsRequest;
use App\MindBody\Models\GetMembershipsResponse;

class SiteApi extends BaseApi
{
	/**
	 * Constructor
	 */
	public function __construct($siteId, $authorization)
	{
		parent::__construct('site', $siteId, $authorization);
	}

	/**
	 * Gets a list of sites that the developer has permission to view.  *
	 * Passing in no `SiteIds` returns all sites that the developer has
	 * access to.  * Passing in one `SiteIds` returns more detailed
	 * information about the specified site.
	 */
	public function GetSites($request)
	{
		$url = $this->getFullPath('sites');
		$siteId = $this->siteId;
		$auth = $this->authorization;

		return $this->client->get($url, $siteId, $auth, $request, GetSitesResponse::class);
	}

	/**
	 * Get the session types used at a site.
	 */
	public function GetSessionTypes($request)
	{
		$url = $this->getFullPath('sessiontypes');
		$siteId = $this->siteId;
		$auth = $this->authorization;

		return $this->client->get($url, $siteId, $auth, $request, GetSessionTypesResponse::class);
	}

	/**
	 * Get locations for a site.
	 */
	public function GetLocations($request)
	{
		$url = $this->getFullPath('locations');
		$siteId = $this->siteId;
		$auth = $this->authorization;

		return $this->client->get($url, $siteId, $auth, $request, GetLocationsResponse::class);
	}

	/**
	 * Get service categories offered at a site.
	 */
	public function GetPrograms($request)
	{
		$url = $this->getFullPath('programs');
		$siteId = $this->siteId;
		$auth = $this->authorization;

		return $this->client->get($url, $siteId, $auth, $request, GetProgramsResponse::class);
	}

	/**
	 * Get resources used at a site.
	 */
	public function GetResources($request)
	{
		$url = $this->getFullPath('resources');
		$siteId = $this->siteId;
		$auth = $this->authorization;

		return $this->client->get($url, $siteId, $auth, $request, GetResourcesResponse::class);
	}

	/**
	 * Before you can use this endpoint, MINDBODY must approve your developer
	 * account for live access. If you have finished testing in the sandbox
	 * and are ready to begin working with MINDBODY customers, log into your
	 * account and request to go live.    See [Accessing Business Data From M
	 * INDBODY](https://developers.mindbodyonline.com/PublicDocumentation/V6#
	 * accessing-business-data) for more information about the activation
	 * code and how to use it.    Once you are approved, this endpoint
	 * returns an activation code.This endpoint supports only one site per
	 * call.
	 */
	public function GetActivationCode()
	{
		$url = $this->getFullPath('activationcode');
		$siteId = $this->siteId;
		$auth = $this->authorization;

		return $this->client->get($url, $siteId, $auth, null, GetActivationCodeResponse::class);
	}

	/**
	 * Get the memberships at a site.
	 */
	public function GetMemberships($request)
	{
		$url = $this->getFullPath('memberships');
		$siteId = $this->siteId;
		$auth = $this->authorization;

		return $this->client->get($url, $siteId, $auth, $request, GetMembershipsResponse::class);
	}

}
