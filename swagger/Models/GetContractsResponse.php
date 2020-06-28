<?php

namespace App\MindBody\Models;

/**
 * no description available
 */
class GetContractsResponse extends BaseModel
{
	/**
	 * Contains information about the pagination used.
	 * 
	 * @var PaginationResponse
	 */
	public $paginationResponse;
	/**
	 * Contains information about each contract.
	 * 
	 * @var Contract[]
	 */
	public $contracts;

	protected function getInputMap()
	{
		return [
			'PaginationResponse' => ['paginationResponse', PaginationResponse::class],
			'Contracts' => ['contracts', Contract::class],
			];
	}

	protected function getOutputMap()
	{
		return [
			'paginationResponse' => 'PaginationResponse',
			'contracts' => 'Contracts',
			];
	}
}
