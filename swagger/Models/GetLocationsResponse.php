<?php

namespace App\MindBody\Models;

/*
 * no description available
 */
class GetLocationsResponse extends BaseModel
{
	/*
	 * Contains information about the pagination used.
	 * 
	 * @var PaginationResponse
	 */
	public $paginationResponse;
	/*
	 * Contains information about the locations.
	 * 
	 * @var Location[]
	 */
	public $locations;
}
