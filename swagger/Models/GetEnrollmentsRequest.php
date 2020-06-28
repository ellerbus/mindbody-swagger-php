<?php

namespace App\MindBody\Models;

/**
 * no description available
 */
class GetEnrollmentsRequest extends BaseModel
{
	/**
	 * A list of the requested class schedule IDs. If omitted, all class
	 * schedule IDs return.
	 * 
	 * @var integer[]
	 */
	public $classScheduleIds;
	/**
	 * The end of the date range. The response returns any active enrollments
	 * that occur on or before this day.<br />  Default: **StartDate**
	 * 
	 * @var string
	 */
	public $endDate;
	/**
	 * List of the IDs for the requested locations. If omitted, all location
	 * IDs return.
	 * 
	 * @var integer[]
	 */
	public $locationIds;
	/**
	 * List of the IDs for the requested programs. If omitted, all program
	 * IDs return.
	 * 
	 * @var integer[]
	 */
	public $programIds;
	/**
	 * List of the IDs for the requested session types. If omitted, all
	 * session types IDs return.
	 * 
	 * @var integer[]
	 */
	public $sessionTypeIds;
	/**
	 * List of the IDs for the requested staff IDs. If omitted, all staff IDs
	 * return.
	 * 
	 * @var integer[]
	 */
	public $staffIds;
	/**
	 * The start of the date range. The response returns any active
	 * enrollments that occur on or after this day.<br />  Default:
	 * **today’s date**
	 * 
	 * @var string
	 */
	public $startDate;
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
