<?php

namespace App\MindBody\Models;

/**
 * no description available
 */
class GetRequiredClientFieldsResponse extends BaseModel
{
	/**
	 * A list of strings that maps to the client fields that are required by
	 * the site.
	 * 
	 * @var string[]
	 */
	public $requiredClientFields;
}
