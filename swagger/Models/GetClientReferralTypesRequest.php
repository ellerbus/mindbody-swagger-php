<?php

namespace App\MindBody\Models;

/*
 * no description available
 */
class GetClientReferralTypesRequest extends BaseModel
{
	/*
	 * When `true`, filters the results to include subtypes and inactive
	 * referral types.<br />  When `false`, includes no subtypes and only
	 * active types.
	 * 
	 * @var boolean
	 */
	public $includeInactive;
}
