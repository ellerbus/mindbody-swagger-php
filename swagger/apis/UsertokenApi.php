<?php

namespace App\Mindbody\Apis;

use App\Mindbody\Models\IssueRequest;
use App\Mindbody\Models\IssueResponse;

class UsertokenApi extends BaseApi
{
	/**
	 * Constructor
	 */
	public function __construct($siteId, $authorization)
	{
		parent::__construct('usertoken', $siteId, $authorization);
	}

	/**
	 * Get a staff user token.
	 */
	public function issue($request)
	{
		$url = $this->getFullPath('issue');

		return $this->client->post($url, $request, IssueResponse::class);
	}

	/**
	 * Revokes the user token in the Authorization header.
	 */
	public function revoke()
	{
		$url = $this->getFullPath('revoke');

		return $this->client->delete($url, null, null);
	}

}
