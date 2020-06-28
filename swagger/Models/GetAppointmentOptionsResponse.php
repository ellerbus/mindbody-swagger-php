<?php

namespace App\MindBody\Models;

/**
 * no description available
 */
class GetAppointmentOptionsResponse extends BaseModel
{
	/**
	 * Contains information about the appointment options.
	 * 
	 * @var AppointmentOption[]
	 */
	public $options;

	protected function getInputMap()
	{
		return [
			'Options' => ['options', AppointmentOption::class],
			];
	}

	protected function getOutputMap()
	{
		return [
			'options' => 'Options',
			];
	}
}
