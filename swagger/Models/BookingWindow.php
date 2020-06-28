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
	 * @var string
	 */
	public $startDateTime;
	/**
	 * Date and time that the booking window closes; that is, the last day of
	 * sales.
	 * 
	 * @var string
	 */
	public $endDateTime;
	/**
	 * The time that the booking window opens; that is, the time that the
	 * store opens.
	 * 
	 * @var string
	 */
	public $dailyStartTime;
	/**
	 * The time that the booking window closes; that is, the time that the
	 * store closes.
	 * 
	 * @var string
	 */
	public $dailyEndTime;

	protected function getInputMap()
	{
		return [
			'StartDateTime' => 'startDateTime',
			'EndDateTime' => 'endDateTime',
			'DailyStartTime' => 'dailyStartTime',
			'DailyEndTime' => 'dailyEndTime',
			];
	}

	protected function getOutputMap()
	{
		return [
			'startDateTime' => 'StartDateTime',
			'endDateTime' => 'EndDateTime',
			'dailyStartTime' => 'DailyStartTime',
			'dailyEndTime' => 'DailyEndTime',
			];
	}
}
