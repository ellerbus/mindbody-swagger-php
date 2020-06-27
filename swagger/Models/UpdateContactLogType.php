<?php

namespace App\MindBody\Models;

/*
 * no description available
 */
class UpdateContactLogType extends BaseModel
{
	/*
	 * The ID of the contact log type to update the subtypes of.
	 * 
	 * @var integer
	 */
	public $id;
	/*
	 * The subtype IDs that are to be added to the contact log.
	 * 
	 * @var integer[]
	 */
	public $subTypes;
}
