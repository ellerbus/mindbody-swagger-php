<?php

namespace App\MindBody\Models;

/**
 * no description available
 */
class GetSalesResponse extends BaseModel
{
	/**
	 * Contains information about the pagination used.
	 * 
	 * @var PaginationResponse 
	 */
	public $paginationResponse;
	/**
	 * Contains the Sale objects, each of which describes the sale and
	 * payment for a purchase event.
	 * 
	 * @var Sale[] 
	 */
	public $sales;

	protected function getInputMap()
	{
		return [
			'PaginationResponse' => ['paginationResponse', PaginationResponse::class, null],
			'Sales' => ['sales', 'array', Sale::class],
			];
	}

	protected function getOutputMap()
	{
		return [
			'paginationResponse' => ['PaginationResponse', PaginationResponse::class, null],
			'sales' => ['Sales', 'array', Sale::class],
			];
	}
}
