<?php

namespace App\MindBody\Models;

/**
 * no description available
 */
class GetPackagesResponse extends BaseModel
{
	/**
	 * Contains information about the resulting packages.
	 * 
	 * @var Package[]
	 */
	public $packages;
	/**
	 * Contains information about the pagination used.
	 * 
	 * @var PaginationResponse
	 */
	public $paginationResponse;

	protected function getInputMap()
	{
		return [
			'Packages' => ['packages', Package::class],
			'PaginationResponse' => ['paginationResponse', PaginationResponse::class],
			];
	}

	protected function getOutputMap()
	{
		return [
			'packages' => 'Packages',
			'paginationResponse' => 'PaginationResponse',
			];
	}
}
