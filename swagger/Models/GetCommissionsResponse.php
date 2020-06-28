<?php

namespace App\MindBody\Models;

/**
 * no description available
 */
class GetCommissionsResponse extends BaseModel
{
	/**
	 * Contains information about the pagination used.
	 * 
	 * @var PaginationResponse
	 */
	public $paginationResponse;
	/**
	 * Contains information about commissions earned by staff for sales
	 * within the given date range. Results are ordered by `SaleId`, then by
	 * `StaffId`.
	 * 
	 * @var CommissionPayrollEvent[]
	 */
	public $commissions;

	protected function getInputMap()
	{
		return [
			'PaginationResponse' => ['paginationResponse', PaginationResponse::class],
			'Commissions' => ['commissions', CommissionPayrollEvent::class],
			];
	}

	protected function getOutputMap()
	{
		return [
			'paginationResponse' => 'PaginationResponse',
			'commissions' => 'Commissions',
			];
	}
}
