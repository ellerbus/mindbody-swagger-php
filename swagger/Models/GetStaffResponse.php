<?php

namespace App\MindBody\Models;

/**
 * no description available
 */
class GetStaffResponse extends BaseModel
{
	/**
	 * no description available
	 * 
	 * @var PaginationResponse 
	 */
	public $paginationResponse;
	/**
	 * A list of staff members.
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
