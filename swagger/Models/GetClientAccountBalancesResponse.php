<?php

namespace App\MindBody\Models;

/*
 * no description available
 */
class GetClientAccountBalancesResponse extends BaseModel
{
	/*
	 * Contains information about the pagination used.
	 * 
	 * @var PaginationResponse
	 */
	public $paginationResponse;
	/*
	 * A list of clients.
	 * 
	 * @var Client[]
	 */
	public $clients;
}
