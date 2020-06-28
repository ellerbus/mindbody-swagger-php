<?php

namespace App\MindBody\Models;

/**
 * no description available
 */
class GetContactLogsResponse extends BaseModel
{
	/**
	 * Contains information about the pagination used.
	 * 
	 * @var PaginationResponse
	 */
	public $paginationResponse;
	/**
	 * Contains the information about the contact logs.
	 * 
	 * @var ContactLog[]
	 */
	public $contactLogs;
}
