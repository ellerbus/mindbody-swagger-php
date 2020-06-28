<?php

namespace App\MindBody\Models;

/**
 * no description available
 */
class GetTimeCardsResponse extends BaseModel
{
	/**
	 * Contains information about the pagination used.
	 * 
	 * @var PaginationResponse
	 */
	public $paginationResponse;
	/**
	 * Information about time card entries, ordered by staff ID.
	 * 
	 * @var TimeCardEvent[]
	 */
	public $timeCards;
}
