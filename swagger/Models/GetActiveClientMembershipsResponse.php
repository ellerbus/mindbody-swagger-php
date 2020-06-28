<?php

namespace App\MindBody\Models;

/**
 * no description available
 */
class GetActiveClientMembershipsResponse extends BaseModel
{
	/**
	 * Contains information about the pagination used.
	 * 
	 * @var PaginationResponse
	 */
	public $paginationResponse;
	/**
	 * Details about the requested memberships.
	 * 
	 * @var ClientMembership[]
	 */
	public $clientMemberships;

	protected function getInputMap()
	{
		return [
			'PaginationResponse' => ['paginationResponse', PaginationResponse::class],
			'ClientMemberships' => ['clientMemberships', ClientMembership::class],
			];
	}

	protected function getOutputMap()
	{
		return [
			'paginationResponse' => 'PaginationResponse',
			'clientMemberships' => 'ClientMemberships',
			];
	}
}
