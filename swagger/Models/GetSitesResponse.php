<?php

namespace App\Mindbody\Models;

/**
 * no description available
 */
class GetSitesResponse extends BaseModel
{
	/**
	 * Contains information about the pagination used.
	 * 
	 * @var PaginationResponse 
	 */
	public $paginationResponse;
	/**
	 * Contains information about the sites.
	 * 
	 * @var Site[] 
	 */
	public $sites;

	protected function getInputMap()
	{
		return [
			'PaginationResponse' => ['paginationResponse', PaginationResponse::class, null],
			'Sites' => ['sites', 'array', Site::class],
			];
	}

	protected function getOutputMap()
	{
		return [
			'paginationResponse' => ['PaginationResponse', PaginationResponse::class, null],
			'sites' => ['Sites', 'array', Site::class],
			];
	}
}
