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
}
