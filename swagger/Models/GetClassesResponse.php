<?php

namespace App\MindBody\Models;

/*
 * no description available
 */
class GetClassesResponse extends BaseModel
{
	/*
	 * Contains information about the pagination used.
	 * 
	 * @var PaginationResponse
	 */
	public $paginationResponse;
	/*
	 * A list of the requested classes.
	 * 
	 * @var Class[]
	 */
	public $classes;
}
