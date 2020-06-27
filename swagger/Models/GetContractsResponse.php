<?php

namespace App\MindBody\Models;

/*
 * no description available
 */
class GetContractsResponse extends BaseModel
{
	/*
	 * Contains information about the pagination used.
	 * 
	 * @var PaginationResponse
	 */
	public $paginationResponse;
	/*
	 * Contains information about each contract.
	 * 
	 * @var Contract[]
	 */
	public $contracts;
}
