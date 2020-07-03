<?php

namespace App\Mindbody\Apis;

use App\Mindbody\Models\GetSitesRequest;
use App\Mindbody\Models\GetSitesResponse;
use App\Mindbody\Models\GetSessionTypesRequest;
use App\Mindbody\Models\GetSessionTypesResponse;
use App\Mindbody\Models\GetLocationsRequest;
use App\Mindbody\Models\GetLocationsResponse;
use App\Mindbody\Models\GetProgramsRequest;
use App\Mindbody\Models\GetProgramsResponse;
use App\Mindbody\Models\GetResourcesRequest;
use App\Mindbody\Models\GetResourcesResponse;
use App\Mindbody\Models\GetActivationCodeResponse;
use App\Mindbody\Models\GetMembershipsRequest;
use App\Mindbody\Models\GetMembershipsResponse;

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
	public function getSites($request)
	{
		$url = $this->getFullPath('sites');

		return $this->client->get($url, $request, GetSitesResponse::class);
	}

	/**
	 * Get the session types used at a site.
	 */
	public function getSessionTypes($request)
	{
		$url = $this->getFullPath('sessiontypes');

		return $this->client->get($url, $request, GetSessionTypesResponse::class);
	}

	/**
	 * Get locations for a site.
	 */
	public function getLocations($request)
	{
		$url = $this->getFullPath('locations');

		return $this->client->get($url, $request, GetLocationsResponse::class);
	}

	/**
	 * Get service categories offered at a site.
	 */
	public function getPrograms($request)
	{
		$url = $this->getFullPath('programs');

		return $this->client->get($url, $request, GetProgramsResponse::class);
	}

	/**
	 * Get resources used at a site.
	 */
	public function getResources($request)
	{
		$url = $this->getFullPath('resources');

		return $this->client->get($url, $request, GetResourcesResponse::class);
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
	public function getActivationCode()
	{
		$url = $this->getFullPath('activationcode');

		return $this->client->get($url, null, GetActivationCodeResponse::class);
	}

	/**
	 * Get the memberships at a site.
	 */
	public function getMemberships($request)
	{
		$url = $this->getFullPath('memberships');

		return $this->client->get($url, $request, GetMembershipsResponse::class);
	}

}
