<?php

namespace App\MindBody\Models;

/*
 * no description available
 */
class GetPackagesResponse extends BaseModel
{
	/*
	 * Contains information about the resulting packages.
	 * 
	 * @var Package[]
	 */
	public $packages;
	/*
	 * Contains information about the pagination used.
	 * 
	 * @var PaginationResponse
	 */
	public $paginationResponse;
}
