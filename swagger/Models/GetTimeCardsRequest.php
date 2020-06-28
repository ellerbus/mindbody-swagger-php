<?php

namespace App\MindBody\Models;

/**
 * no description available
 */
class GetTimeCardsRequest extends BaseModel
{
	/**
	 * A list of staff IDs that you want to retrieve payroll information for.
	 * If you do not supply a `StaffId`, all active staff members return,
	 * ordered by staff ID.
	 * 
	 * @var integer
	 */
	public $staffId;
	/**
	 * The beginning of the date range for the payroll information to be
	 * returned. The maximum allowed date range is 14 days.  * If you do not
	 * supply a `StartDateTime`, data returns for the seven days prior to the
	 * `EndDateTime` that you supply.  * If you do not supply either a
	 * `StartDateTime` or an `EndDateTime`, the data returns for seven days
	 * prior to today’s date.
	 * 
	 * @var string
	 */
	public $startDateTime;
	/**
	 * The end of the date range for the payroll information to be returned.
	 * The maximum allowed date range is 14 days.<br />  Default: **Today’s
	 * date**  * If you do not supply an `EndDateTime`, the data returns for
	 * the period from the `StartDateTime` that you supply to today’s date.
	 * * If you do not supply an `EndDateTime` or a `StartDateTime`, data
	 * returns for the seven days prior to today’s date.
	 * 
	 * @var string
	 */
	public $endDateTime;
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
