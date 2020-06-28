<?php

namespace App\MindBody\Models;

/**
 * no description available
 */
class GetSessionTypesRequest extends BaseModel
{
	/**
	 * Filters results to session types that belong to one of the given
	 * program IDs. If omitted, all program IDs return.
	 * 
	 * @var integer[]
	 */
	public $programIDs;
	/**
	 * When `true`, indicates that only the session types that can be booked
	 * online should be returned.<br />  Default: **false**
	 * 
	 * @var boolean
	 */
	public $onlineOnly;
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
}
