<?php

namespace App\MindBody\Models;

/*
 * no description available
 */
class GetPackagesRequest extends BaseModel
{
	/*
	 * A list of the packages IDs to filter by.
	 * 
	 * @var integer[]
	 */
	public $packageIds;
	/*
	 * When `true`, only returns products that can be sold online.<br />
	 * When `false`, all products are returned.<br />  Default: **false**
	 * 
	 * @var boolean
	 */
	public $sellOnline;
	/*
	 * Number of results to include, defaults to 100
	 * 
	 * @var integer
	 */
	public $limit;
	/*
	 * Page offset, defaults to 0.
	 * 
	 * @var integer
	 */
	public $offset;
}
