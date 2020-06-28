<?php

namespace App\MindBody\Models;

/**
 * no description available
 */
class GetSitesRequest extends BaseModel
{
	/**
	 * List of the requested site IDs. When omitted, returns all sites that
	 * the source has access to.
	 * 
	 * @var integer[]
	 */
	public $siteIds;
	/**
	 * Number of results to include, defaults to 100
	 * 
	 * @var integer
	 */
	public $limit;
	/**
	 * Page offset, defaults to 0.
	 * 
	 * @var integer
	 */
	public $offset;

	protected function getInputMap()
	{
		return [
			'SiteIds' => 'siteIds',
			'Limit' => 'limit',
			'Offset' => 'offset',
			];
	}

	protected function getOutputMap()
	{
		return [
			'siteIds' => 'SiteIds',
			'limit' => 'Limit',
			'offset' => 'Offset',
			];
	}
}
