<?php

namespace App\Mindbody\Models;

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

	protected function getInputMap()
	{
		return [
			'PaginationResponse' => ['paginationResponse', PaginationResponse::class, null],
			'SessionTypes' => ['sessionTypes', 'array', SessionType::class],
			];
	}

	protected function getOutputMap()
	{
		return [
			'paginationResponse' => ['PaginationResponse', PaginationResponse::class, null],
			'sessionTypes' => ['SessionTypes', 'array', SessionType::class],
			];
	}
}
