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

	protected function getInputMap()
	{
		return [
			'RequestedLimit' => 'requestedLimit',
			'RequestedOffset' => 'requestedOffset',
			'PageSize' => 'pageSize',
			'TotalResults' => 'totalResults',
			];
	}

	protected function getOutputMap()
	{
		return [
			'requestedLimit' => 'RequestedLimit',
			'requestedOffset' => 'RequestedOffset',
			'pageSize' => 'PageSize',
			'totalResults' => 'TotalResults',
			];
	}
}
