<?php

namespace App\MindBody\Models;

/**
 * The booking window for registration
 */
class BookingWindow extends BaseModel
{
	/**
	 * Date and time that the booking window opens; that is, the first day of
	 * sales.
	 * 
	 * @var string format:date-time
	 */
	public $startDateTime;
	/**
	 * Date and time that the booking window closes; that is, the last day of
	 * sales.
	 * 
	 * @var string format:date-time
	 */
	public $endDateTime;
	/**
	 * The time that the booking window opens; that is, the time that the
	 * store opens.
	 * 
	 * @var string format:date-time
	 */
	public $dailyStartTime;
	/**
	 * The time that the booking window closes; that is, the time that the
	 * store closes.
	 * 
	 * @var string format:date-time
	 */
	public $dailyEndTime;

	protected function getInputMap()
	{
		return [
			'StartDateTime' => ['startDateTime', 'string', 'date-time'],
			'EndDateTime' => ['endDateTime', 'string', 'date-time'],
			'DailyStartTime' => ['dailyStartTime', 'string', 'date-time'],
			'DailyEndTime' => ['dailyEndTime', 'string', 'date-time'],
			];
	}

	protected function getOutputMap()
	{
		return [
			'startDateTime' => ['StartDateTime', 'string', 'date-time'],
			'endDateTime' => ['EndDateTime', 'string', 'date-time'],
			'dailyStartTime' => ['DailyStartTime', 'string', 'date-time'],
			'dailyEndTime' => ['DailyEndTime', 'string', 'date-time'],
			];
	}
}
