<?php

namespace App\MindBody\Models;

/**
 * no description available
 */
class Program extends BaseModel
{
	/**
	 * The service category’s ID.
	 * 
	 * @var integer
	 */
	public $id;
	/**
	 * The name of this service category.
	 * 
	 * @var string
	 */
	public $name;
	/**
	 * The service category’s schedule type.
	 * 
	 * @var string
	 */
	public $scheduleType;
	/**
	 * The offset to use for the service category.
	 * 
	 * @var integer
	 */
	public $cancelOffset;

	protected function getInputMap()
	{
		return [
			'Id' => 'id',
			'Name' => 'name',
			'ScheduleType' => 'scheduleType',
			'CancelOffset' => 'cancelOffset',
			];
	}

	protected function getOutputMap()
	{
		return [
			'id' => 'Id',
			'name' => 'Name',
			'scheduleType' => 'ScheduleType',
			'cancelOffset' => 'CancelOffset',
			];
	}
}
