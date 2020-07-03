<?php

namespace App\Mindbody\Models;

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

	protected function getInputMap()
	{
		return [
			'PaginationResponse' => ['paginationResponse', PaginationResponse::class, null],
			'TimeCards' => ['timeCards', 'array', TimeCardEvent::class],
			];
	}

	protected function getOutputMap()
	{
		return [
			'paginationResponse' => ['PaginationResponse', PaginationResponse::class, null],
			'timeCards' => ['TimeCards', 'array', TimeCardEvent::class],
			];
	}
}
