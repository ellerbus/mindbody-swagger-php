<?php

namespace App\MindBody\Models;

/*
 * no description available
 */
class GetSitesResponse extends BaseModel
{
	/*
	 * Contains information about the pagination used.
	 * 
	 * @var PaginationResponse
	 */
	public $paginationResponse;
	/*
	 * Contains information about the sites.
	 * 
	 * @var Site[]
	 */
	public $sites;
}
