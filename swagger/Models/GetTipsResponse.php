<?php

namespace App\Mindbody\Models;

/**
 * no description available
 */
class GetTipsResponse extends BaseModel
{
	/**
	 * Contains information about the pagination used. See Pagination for a
	 * description of the Pagination information.
	 * 
	 * @var PaginationResponse 
	 */
	public $paginationResponse;
	/**
	 * Contains information about tips given to staff members within the
	 * given date range. Results are ordered by StaffId.
	 * 
	 * @var Tip[] 
	 */
	public $tips;

	protected function getInputMap()
	{
		return [
			'PaginationResponse' => ['paginationResponse', PaginationResponse::class, null],
			'Tips' => ['tips', 'array', Tip::class],
			];
	}

	protected function getOutputMap()
	{
		return [
			'paginationResponse' => ['PaginationResponse', PaginationResponse::class, null],
			'tips' => ['Tips', 'array', Tip::class],
			];
	}
}
