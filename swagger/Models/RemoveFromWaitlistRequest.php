<?php

namespace App\MindBody\Models;

/**
 * no description available
 */
class RemoveFromWaitlistRequest extends BaseModel
{
	/**
	 * A list of waiting list IDs to remove from waiting lists.
	 * 
	 * @var integer[] 
	 */
	public $waitlistEntryIds;
	/**
	 * Constructor
	 */
	public function __construct($waitlistEntryIds)
	{
		$this->waitlistEntryIds = $waitlistEntryIds;
	}

	protected function getInputMap()
	{
		return [
			'WaitlistEntryIds' => ['waitlistEntryIds', 'array', null],
			];
	}

	protected function getOutputMap()
	{
		return [
			'waitlistEntryIds' => ['WaitlistEntryIds', 'array', null],
			];
	}
}
