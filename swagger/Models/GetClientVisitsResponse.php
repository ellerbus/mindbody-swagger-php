<?php

namespace App\MindBody\Models;

/**
 * no description available
 */
class GetClientVisitsResponse extends BaseModel
{
	/**
	 * Contains information about the pagination used.
	 * 
	 * @var PaginationResponse
	 */
	public $paginationResponse;
	/**
	 * Contains information about client visits.
	 * 
	 * @var Visit[]
	 */
	public $visits;
}
