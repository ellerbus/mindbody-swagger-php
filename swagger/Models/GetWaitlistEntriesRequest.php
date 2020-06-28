<?php

namespace App\MindBody\Models;

/**
 * no description available
 */
class GetWaitlistEntriesRequest extends BaseModel
{
	/**
	 * The requested class IDs. If a class ID is present, the request
	 * automatically disregards any class schedule IDs in the request. <br />
	 * Either `ClassScheduleIds`, `ClientIds`, `WaitlistEntryIds`, or
	 * `ClassIds` is required; the others become optional.<br />  Default:
	 * **all ClassIds**
	 * 
	 * @var integer[]
	 */
	public $classIds;
	/**
	 * The requested class schedule IDs. If a class ID is present, the
	 * request automatically disregards any class schedule IDs in the
	 * request.<br />  Either `ClassScheduleIds`, `ClientIds`,
	 * `WaitlistEntryIds`, or `ClassIds` is required; the others become
	 * optional.<br />  Default: **all ClassScheduleIds**
	 * 
	 * @var integer[]
	 */
	public $classScheduleIds;
	/**
	 * The requested client IDs.<br />  Either `ClassScheduleIds`,
	 * `ClientIds`, `WaitlistEntryIds`, or `ClassIds` is required; the others
	 * become optional.<br />  Default: **all ClientIds**
	 * 
	 * @var string[]
	 */
	public $clientIds;
	/**
	 * When `true`, indicates that past waiting list entries are hidden from
	 * clients.<br />  When `false`, indicates that past entries are not
	 * hidden from clients.<br />  Default: **false**
	 * 
	 * @var boolean
	 */
	public $hidePastEntries;
	/**
	 * The requested waiting list entry IDs.<br />  Either
	 * `ClassScheduleIds`, `ClientIds`, `WaitlistEntryIds`, or `ClassIds` is
	 * required; the others become optional.<br />  Default: **all
	 * WaitlistEntryIds**
	 * 
	 * @var integer[]
	 */
	public $waitlistEntryIds;
	/**
	 * Number of results to include, defaults to 100
	 * 
	 * @var integer
	 */
	public $limit;
	/**
	 * Page offset, defaults to 0.
	 * 
	 * @var integer
	 */
	public $offset;
}
