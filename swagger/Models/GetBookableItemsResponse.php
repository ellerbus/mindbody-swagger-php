<?php

namespace App\MindBody\Models;

/**
 * no description available
 */
class GetBookableItemsResponse extends BaseModel
{
	/**
	 * Contains information about the pagination used.
	 * 
	 * @var PaginationResponse
	 */
	public $paginationResponse;
	/**
	 * Contains information about the availabilities for appointment booking.
	 * 
	 * @var Availability[]
	 */
	public $availabilities;
}
