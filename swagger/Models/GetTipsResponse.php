<?php

namespace App\MindBody\Models;

/*
 * no description available
 */
class GetTipsResponse extends BaseModel
{
	/*
	 * Contains information about the pagination used. See Pagination for a
	 * description of the Pagination information.
	 * 
	 * @var PaginationResponse
	 */
	public $paginationResponse;
	/*
	 * Contains information about tips given to staff members within the
	 * given date range. Results are ordered by StaffId.
	 * 
	 * @var Tip[]
	 */
	public $tips;
}