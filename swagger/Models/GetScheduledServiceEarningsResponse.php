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

	protected function getInputMap()
	{
		return [
			'PaginationResponse' => ['paginationResponse', PaginationResponse::class, null],
			'ScheduledServiceEarnings' => ['scheduledServiceEarnings', 'array', ScheduledServiceEarningsEvent::class],
			];
	}

	protected function getOutputMap()
	{
		return [
			'paginationResponse' => ['PaginationResponse', PaginationResponse::class, null],
			'scheduledServiceEarnings' => ['ScheduledServiceEarnings', 'array', ScheduledServiceEarningsEvent::class],
			];
	}
}
