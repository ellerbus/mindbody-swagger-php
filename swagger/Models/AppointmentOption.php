<?php

namespace App\MindBody\Models;

/**
 * An appointment option name/value pair
 */
class AppointmentOption extends BaseModel
{
	/**
	 * The name displayed for this appointment option.
	 * 
	 * @var string
	 */
	public $displayName;
	/**
	 * The name given to this option.
	 * 
	 * @var string
	 */
	public $name;
	/**
	 * The value of the option.
	 * 
	 * @var string
	 */
	public $value;
	/**
	 * The data type of the option value.
	 * 
	 * @var string
	 */
	public $type;

	protected function getInputMap()
	{
		return [
			'DisplayName' => 'displayName',
			'Name' => 'name',
			'Value' => 'value',
			'Type' => 'type',
			];
	}

	protected function getOutputMap()
	{
		return [
			'displayName' => 'DisplayName',
			'name' => 'Name',
			'value' => 'Value',
			'type' => 'Type',
			];
	}
}
