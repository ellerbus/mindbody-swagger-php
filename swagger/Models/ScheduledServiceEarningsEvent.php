<?php

namespace App\MindBody\Models;

/*
 * no description available
 */
class ScheduledServiceEarningsEvent extends BaseModel
{
	/*
	 * The ID of the staff member who taught the class.
	 * 
	 * @var integer
	 */
	public $staffId;
	/*
	 * The class' ID.
	 * 
	 * @var integer
	 */
	public $scheduledServiceId;
	/*
	 * The type of the scheduled service; i.e, a class, appointment, or
	 * enrollment.
	 * 
	 * @var string
	 */
	public $scheduledServiceType;
	/*
	 * The total monetary amount the staff is to be paid for this class.
	 * 
	 * @var number
	 */
	public $earnings;
	/*
	 * no description available
	 * 
	 * @var string
	 */
	public $dateTime;
}
