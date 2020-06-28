<?php

namespace App\MindBody\Models;

/**
 * no description available
 */
class GetClassSchedulesResponse extends BaseModel
{
	/**
	 * Contains information about the pagination used.
	 * 
	 * @var PaginationResponse 
	 */
	public $paginationResponse;
	/**
	 * Contains information about the class schedules.
	 * 
	 * @var ClassSchedule[] 
	 */
	public $classSchedules;

	protected function getInputMap()
	{
		return [
			'PaginationResponse' => ['paginationResponse', PaginationResponse::class, null],
			'ClassSchedules' => ['classSchedules', 'array', ClassSchedule::class],
			];
	}

	protected function getOutputMap()
	{
		return [
			'paginationResponse' => ['PaginationResponse', PaginationResponse::class, null],
			'classSchedules' => ['ClassSchedules', 'array', ClassSchedule::class],
			];
	}
}
