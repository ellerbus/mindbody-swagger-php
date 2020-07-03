<?php

namespace App\Mindbody\Models;

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
	 * @var integer format:int32
	 */
	public $limit;
	/**
	 * Page offset, defaults to 0.
	 * 
	 * @var integer format:int32
	 */
	public $offset;

	protected function getInputMap()
	{
		return [
			'SiteIds' => ['siteIds', 'array', null],
			'Limit' => ['limit', 'integer', 'int32'],
			'Offset' => ['offset', 'integer', 'int32'],
			];
	}

	protected function getOutputMap()
	{
		return [
			'siteIds' => ['SiteIds', 'array', null],
			'limit' => ['Limit', 'integer', 'int32'],
			'offset' => ['Offset', 'integer', 'int32'],
			];
	}
}
