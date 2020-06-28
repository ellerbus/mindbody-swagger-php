<?php

namespace App\MindBody\Models;

/**
 * no description available
 */
class GetCustomClientFieldsResponse extends BaseModel
{
	/**
	 * Contains information about the pagination used.
	 * 
	 * @var PaginationResponse
	 */
	public $paginationResponse;
	/**
	 * Contains information about the available custom client fields.
	 * 
	 * @var CustomClientField[]
	 */
	public $customClientFields;
}
