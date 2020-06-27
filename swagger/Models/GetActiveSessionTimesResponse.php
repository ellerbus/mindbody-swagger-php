<?php

namespace App\MindBody\Models;

/*
 * no description available
 */
class GetActiveSessionTimesResponse extends BaseModel
{
	/*
	 * Contains information about the pagination used.
	 * 
	 * @var PaginationResponse
	 */
	public $paginationResponse;
	/*
	 * List of available start times for active sessions. Note the following:
	 * * The times returned represent possibilities for scheduling a session,
	 * not necessarily currently scheduled sessions.  * The response includes
	 * either all schedule types or those filtered by supplying
	 * `ScheduleType` or `SessionTypeIds`.  * Each session has an associated
	 * schedule type, but when you supply `SessionTypeIds`, they may map to
	 * one or more of the schedule types.
	 * 
	 * @var string[]
	 */
	public $activeSessionTimes;
}
