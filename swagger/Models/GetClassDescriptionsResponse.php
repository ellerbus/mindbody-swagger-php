<?php

namespace App\MindBody\Models;

/**
 * no description available
 */
class GetClassDescriptionsResponse extends BaseModel
{
	/**
	 * Contains information about the pagination used.
	 * 
	 * @var PaginationResponse
	 */
	public $paginationResponse;
	/**
	 * Contains information about the class descriptions.
	 * 
	 * @var ClassDescription[]
	 */
	public $classDescriptions;
}
