<?php

namespace App\MindBody\Models;

/**
 * no description available
 */
class GetClientContractsResponse extends BaseModel
{
	/**
	 * Contains the details of the client’s contract.
	 * 
	 * @var ClientContract[]
	 */
	public $contracts;
	/**
	 * Contains information about the pagination used.
	 * 
	 * @var PaginationResponse
	 */
	public $paginationResponse;

	protected function getInputMap()
	{
		return [
			'Contracts' => ['contracts', ClientContract::class],
			'PaginationResponse' => ['paginationResponse', PaginationResponse::class],
			];
	}

	protected function getOutputMap()
	{
		return [
			'contracts' => 'Contracts',
			'paginationResponse' => 'PaginationResponse',
			];
	}
}
