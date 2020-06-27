<?php

namespace App\MindBody\Models;

/*
 * Defines what sort of subtypes we want to add to this contact log type
 */
class AddContactLogType extends BaseModel
{
	/*
	 * The contact log type’s ID.
	 * 
	 * @var integer
	 */
	public $id;
	/*
	 * A list of the subtype IDs used to tag this contact log type.
	 * 
	 * @var integer[]
	 */
	public $subTypes;
}
