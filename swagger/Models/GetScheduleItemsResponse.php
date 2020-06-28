<?php

namespace App\MindBody\Models;

/**
 * no description available
 */
class GetScheduleItemsResponse extends BaseModel
{
	/**
	 * Contains information about the pagination used.
	 * 
	 * @var PaginationResponse
	 */
	public $paginationResponse;
	/**
	 * Contains information about staff members with schedule items.
	 * 
	 * @var Staff[]
	 */
	public $staffMembers;
}
