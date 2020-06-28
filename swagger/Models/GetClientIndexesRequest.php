<?php

namespace App\MindBody\Models;

/**
 * no description available
 */
class GetClientIndexesRequest extends BaseModel
{
	/**
	 * When `true`, filters the results to only indexes that are required on
	 * creation.<br />  When `false` or omitted, returns all of the client
	 * indexes.
	 * 
	 * @var boolean
	 */
	public $requiredOnly;
}
