<?php

namespace App\MindBody\Models;

/*
 * no description available
 */
class MembershipTypeRestriction extends BaseModel
{
	/*
	 * The ID of the membership that is allowed to purchase the contract.
	 * 
	 * @var integer
	 */
	public $id;
	/*
	 * The name of the membership type.
	 * 
	 * @var string
	 */
	public $name;
}
