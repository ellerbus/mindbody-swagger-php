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
	 * @var integer format:int32
	 */
	public $requestedLimit;
	/**
	 * Offset from pagination request
	 * 
	 * @var integer format:int32
	 */
	public $requestedOffset;
	/**
	 * Number of results returned in this response
	 * 
	 * @var integer format:int32
	 */
	public $pageSize;
	/**
	 * Total number of results in dataset
	 * 
	 * @var integer format:int32
	 */
	public $totalResults;

	protected function getInputMap()
	{
		return [
			'RequestedLimit' => ['requestedLimit', 'integer', 'int32'],
			'RequestedOffset' => ['requestedOffset', 'integer', 'int32'],
			'PageSize' => ['pageSize', 'integer', 'int32'],
			'TotalResults' => ['totalResults', 'integer', 'int32'],
			];
	}

	protected function getOutputMap()
	{
		return [
			'requestedLimit' => ['RequestedLimit', 'integer', 'int32'],
			'requestedOffset' => ['RequestedOffset', 'integer', 'int32'],
			'pageSize' => ['PageSize', 'integer', 'int32'],
			'totalResults' => ['TotalResults', 'integer', 'int32'],
			];
	}
}
