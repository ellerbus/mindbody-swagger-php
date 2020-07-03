<?php

namespace App\Mindbody\Models;

/**
 * no description available
 */
class GetContactLogsResponse extends BaseModel
{
	/**
	 * Contains information about the pagination used.
	 * 
	 * @var PaginationResponse 
	 */
	public $paginationResponse;
	/**
	 * Contains the information about the contact logs.
	 * 
	 * @var ContactLog[] 
	 */
	public $contactLogs;

	protected function getInputMap()
	{
		return [
			'PaginationResponse' => ['paginationResponse', PaginationResponse::class, null],
			'ContactLogs' => ['contactLogs', 'array', ContactLog::class],
			];
	}

	protected function getOutputMap()
	{
		return [
			'paginationResponse' => ['PaginationResponse', PaginationResponse::class, null],
			'contactLogs' => ['ContactLogs', 'array', ContactLog::class],
			];
	}
}
