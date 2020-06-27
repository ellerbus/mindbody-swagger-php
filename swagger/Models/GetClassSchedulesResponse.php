<?php

namespace App\MindBody\Models;

/*
 * no description available
 */
class GetClassSchedulesResponse extends BaseModel
{
	/*
	 * Contains information about the pagination used.
	 * 
	 * @var PaginationResponse
	 */
	public $paginationResponse;
	/*
	 * Contains information about the class schedules.
	 * 
	 * @var ClassSchedule[]
	 */
	public $classSchedules;
}
