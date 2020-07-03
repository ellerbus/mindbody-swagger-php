<?php

namespace App\Mindbody\Models;

/**
 * no description available
 */
class GetPackagesRequest extends BaseModel
{
	/**
	 * A list of the packages IDs to filter by.
	 * 
	 * @var integer[] 
	 */
	public $packageIds;
	/**
	 * When `true`, only returns products that can be sold online.<br />
	 * When `false`, all products are returned.<br />  Default: **false**
	 * 
	 * @var boolean 
	 */
	public $sellOnline;
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
			'PackageIds' => ['packageIds', 'array', null],
			'SellOnline' => ['sellOnline', 'boolean', null],
			'Limit' => ['limit', 'integer', 'int32'],
			'Offset' => ['offset', 'integer', 'int32'],
			];
	}

	protected function getOutputMap()
	{
		return [
			'packageIds' => ['PackageIds', 'array', null],
			'sellOnline' => ['SellOnline', 'boolean', null],
			'limit' => ['Limit', 'integer', 'int32'],
			'offset' => ['Offset', 'integer', 'int32'],
			];
	}
}
