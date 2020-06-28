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

	protected function getInputMap()
	{
		return [
			'PaginationResponse' => ['paginationResponse', PaginationResponse::class, null],
			'Availabilities' => ['availabilities', 'array', Availability::class],
			];
	}

	protected function getOutputMap()
	{
		return [
			'paginationResponse' => ['PaginationResponse', PaginationResponse::class, null],
			'availabilities' => ['Availabilities', 'array', Availability::class],
			];
	}
}
