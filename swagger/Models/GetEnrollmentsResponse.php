<?php

namespace App\Mindbody\Models;

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
			'PaginationResponse' => ['paginationResponse', PaginationResponse::class, null],
			'Enrollments' => ['enrollments', 'array', ClassSchedule::class],
			];
	}

	protected function getOutputMap()
	{
		return [
			'paginationResponse' => ['PaginationResponse', PaginationResponse::class, null],
			'enrollments' => ['Enrollments', 'array', ClassSchedule::class],
			];
	}
}
