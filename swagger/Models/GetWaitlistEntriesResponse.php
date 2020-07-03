<?php

namespace App\Mindbody\Models;

/**
 * no description available
 */
class GetWaitlistEntriesResponse extends BaseModel
{
	/**
	 * Contains information about the pagination used.
	 * 
	 * @var PaginationResponse 
	 */
	public $paginationResponse;
	/**
	 * Contains information about the waiting list entries.
	 * 
	 * @var WaitlistEntry[] 
	 */
	public $waitlistEntries;

	protected function getInputMap()
	{
		return [
			'PaginationResponse' => ['paginationResponse', PaginationResponse::class, null],
			'WaitlistEntries' => ['waitlistEntries', 'array', WaitlistEntry::class],
			];
	}

	protected function getOutputMap()
	{
		return [
			'paginationResponse' => ['PaginationResponse', PaginationResponse::class, null],
			'waitlistEntries' => ['WaitlistEntries', 'array', WaitlistEntry::class],
			];
	}
}
