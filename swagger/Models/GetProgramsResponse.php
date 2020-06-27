<?php

namespace App\MindBody\Models;

/*
 * no description available
 */
class GetProgramsResponse extends BaseModel
{
	/*
	 * Contains information about the pagination used.
	 * 
	 * @var PaginationResponse
	 */
	public $paginationResponse;
	/*
	 * Contains information about the programs.
	 * 
	 * @var Program[]
	 */
	public $programs;
}
