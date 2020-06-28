<?php

namespace App\MindBody\Models;

/**
 * no description available
 */
class GetEnrollmentsResponse extends BaseModel
{
	/**
	 * Contains information about the pagination used.
	 * 
	 * @var PaginationResponse
	 */
	public $paginationResponse;
	/**
	 * Contains information about the enrollments.
	 * 
	 * @var ClassSchedule[]
	 */
	public $enrollments;

	protected function getInputMap()
	{
		return [
			'PaginationResponse' => ['paginationResponse', PaginationResponse::class],
			'Enrollments' => ['enrollments', ClassSchedule::class],
			];
	}

	protected function getOutputMap()
	{
		return [
			'paginationResponse' => 'PaginationResponse',
			'enrollments' => 'Enrollments',
			];
	}
}
