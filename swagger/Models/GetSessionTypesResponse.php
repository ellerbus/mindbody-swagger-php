<?php

namespace App\MindBody\Models;

/**
 * no description available
 */
class GetSessionTypesResponse extends BaseModel
{
	/**
	 * Contains information about the pagination properties used.
	 * 
	 * @var PaginationResponse
	 */
	public $paginationResponse;
	/**
	 * Contains information about sessions.
	 * 
	 * @var SessionType[]
	 */
	public $sessionTypes;
}
