<?php

namespace App\MindBody\Models;

/**
 * no description available
 */
class AddAppointmentResponse extends BaseModel
{
	/**
	 * Contains information about the appointment.
	 * 
	 * @var Appointment 
	 */
	public $appointment;

	protected function getInputMap()
	{
		return [
			'Appointment' => ['appointment', Appointment::class, null],
			];
	}

	protected function getOutputMap()
	{
		return [
			'appointment' => ['Appointment', Appointment::class, null],
			];
	}
}
