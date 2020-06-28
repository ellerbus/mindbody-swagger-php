<?php

namespace App\MindBody\Models;

/**
 * no description available
 */
class GetScheduledServiceEarningsResponse extends BaseModel
{
	/**
	 * Contains information about the pagination used.
	 * 
	 * @var PaginationResponse
	 */
	public $paginationResponse;
	/**
	 * Contains the class payroll events.
	 * 
	 * @var ScheduledServiceEarningsEvent[]
	 */
	public $scheduledServiceEarnings;
}
