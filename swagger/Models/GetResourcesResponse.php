<?php

namespace App\MindBody\Models;

/**
 * no description available
 */
class GetResourcesResponse extends BaseModel
{
	/**
	 * Contains information about the pagination used.
	 * 
	 * @var PaginationResponse 
	 */
	public $paginationResponse;
	/**
	 * Contains information about resources as the business.
	 * 
	 * @var Resource[] 
	 */
	public $resources;

	protected function getInputMap()
	{
		return [
			'PaginationResponse' => ['paginationResponse', PaginationResponse::class, null],
			'Resources' => ['resources', 'array', Resource::class],
			];
	}

	protected function getOutputMap()
	{
		return [
			'paginationResponse' => ['PaginationResponse', PaginationResponse::class, null],
			'resources' => ['Resources', 'array', Resource::class],
			];
	}
}
