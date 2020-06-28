<?php

namespace App\MindBody\Clients;

use App\MindBody\Models\IssueRequest;
use App\MindBody\Models\IssueResponse;

class UsertokenApi extends BaseApi
{
	/*
	 * Constructor
	 */
	public function __construct($siteId, $authorization)
	{
		parent::__construct('usertoken', $siteId, $authorization);
	}

	/*
	 * Get a staff user token.
	 */
	public function Issue($request)
	{
		$url = $this->getFullPath('issue');
		$siteId = $this->siteId;
		$auth = $this->authorization;

		return $this->client->post($url, $siteId, $auth, $request, IssueResponse::class);
	}

	/*
	 * Revokes the user token in the Authorization header.
	 */
	public function Revoke()
	{
		$url = $this->getFullPath('revoke');
		$siteId = $this->siteId;
		$auth = $this->authorization;

		return $this->client->delete($url, $siteId, $auth, null, null);
	}

}
