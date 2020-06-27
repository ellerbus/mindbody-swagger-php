<?php

namespace App\MindBody\Models;

/*
 * no description available
 */
class GetClientServicesResponse extends BaseModel
{
	/*
	 * Contains information about the pagination used.
	 * 
	 * @var PaginationResponse
	 */
	public $paginationResponse;
	/*
	 * Contains information about client pricing options.
	 * 
	 * @var ClientService[]
	 */
	public $clientServices;
}
