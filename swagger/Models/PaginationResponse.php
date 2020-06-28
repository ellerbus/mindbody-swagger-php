<?php

namespace App\MindBody\Models;

/**
 * no description available
 */
class PaginationResponse extends BaseModel
{
	/**
	 * Limit from pagination request
	 * 
	 * @var integer
	 */
	public $requestedLimit;
	/**
	 * Offset from pagination request
	 * 
	 * @var integer
	 */
	public $requestedOffset;
	/**
	 * Number of results returned in this response
	 * 
	 * @var integer
	 */
	public $pageSize;
	/**
	 * Total number of results in dataset
	 * 
	 * @var integer
	 */
	public $totalResults;
}
