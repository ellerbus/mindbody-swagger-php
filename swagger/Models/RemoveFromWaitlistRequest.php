<?php

namespace App\MindBody\Models;

/*
 * no description available
 */
class RemoveFromWaitlistRequest extends BaseModel
{
	/*
	 * A list of waiting list IDs to remove from waiting lists.
	 * 
	 * @var integer[]
	 */
	public $waitlistEntryIds;
	/*
	 *
	 */
	public function __construct($waitlistEntryIds)
	{
		$this->waitlistEntryIds = $waitlistEntryIds;
	}
}
