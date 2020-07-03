<?php

namespace App\Mindbody\Models;

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
			'PaginationResponse' => ['paginationResponse', PaginationResponse::class, null],
			'ClientMemberships' => ['clientMemberships', 'array', ClientMembership::class],
			];
	}

	protected function getOutputMap()
	{
		return [
			'paginationResponse' => ['PaginationResponse', PaginationResponse::class, null],
			'clientMemberships' => ['ClientMemberships', 'array', ClientMembership::class],
			];
	}
}
