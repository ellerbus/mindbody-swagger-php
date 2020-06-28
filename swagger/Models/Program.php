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
	 * @var integer format:int32
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
	 * @var integer format:int32
	 */
	public $cancelOffset;

	protected function getInputMap()
	{
		return [
			'Id' => ['id', 'integer', 'int32'],
			'Name' => ['name', 'string', null],
			'ScheduleType' => ['scheduleType', 'string', null],
			'CancelOffset' => ['cancelOffset', 'integer', 'int32'],
			];
	}

	protected function getOutputMap()
	{
		return [
			'id' => ['Id', 'integer', 'int32'],
			'name' => ['Name', 'string', null],
			'scheduleType' => ['ScheduleType', 'string', null],
			'cancelOffset' => ['CancelOffset', 'integer', 'int32'],
			];
	}
}
