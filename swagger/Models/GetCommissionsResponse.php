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
			'PaginationResponse' => ['paginationResponse', PaginationResponse::class, null],
			'Commissions' => ['commissions', 'array', CommissionPayrollEvent::class],
			];
	}

	protected function getOutputMap()
	{
		return [
			'paginationResponse' => ['PaginationResponse', PaginationResponse::class, null],
			'commissions' => ['Commissions', 'array', CommissionPayrollEvent::class],
			];
	}
}
