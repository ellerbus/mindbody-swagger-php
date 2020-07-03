<?php

namespace App\Mindbody\Models;

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

	protected function getInputMap()
	{
		return [
			'PaginationResponse' => ['paginationResponse', PaginationResponse::class, null],
			'StaffMembers' => ['staffMembers', 'array', Staff::class],
			];
	}

	protected function getOutputMap()
	{
		return [
			'paginationResponse' => ['PaginationResponse', PaginationResponse::class, null],
			'staffMembers' => ['StaffMembers', 'array', Staff::class],
			];
	}
}
