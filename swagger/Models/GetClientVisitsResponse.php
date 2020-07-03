<?php

namespace App\Mindbody\Models;

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

	protected function getInputMap()
	{
		return [
			'PaginationResponse' => ['paginationResponse', PaginationResponse::class, null],
			'Visits' => ['visits', 'array', Visit::class],
			];
	}

	protected function getOutputMap()
	{
		return [
			'paginationResponse' => ['PaginationResponse', PaginationResponse::class, null],
			'visits' => ['Visits', 'array', Visit::class],
			];
	}
}
