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
}
