<?php

namespace App\Mindbody\Models;

/**
 * no description available
 */
class GetLocationsResponse extends BaseModel
{
	/**
	 * Contains information about the pagination used.
	 * 
	 * @var PaginationResponse 
	 */
	public $paginationResponse;
	/**
	 * Contains information about the locations.
	 * 
	 * @var Location[] 
	 */
	public $locations;

	protected function getInputMap()
	{
		return [
			'PaginationResponse' => ['paginationResponse', PaginationResponse::class, null],
			'Locations' => ['locations', 'array', Location::class],
			];
	}

	protected function getOutputMap()
	{
		return [
			'paginationResponse' => ['PaginationResponse', PaginationResponse::class, null],
			'locations' => ['Locations', 'array', Location::class],
			];
	}
}
