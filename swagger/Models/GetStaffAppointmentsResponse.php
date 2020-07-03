<?php

namespace App\Mindbody\Models;

/**
 * no description available
 */
class GetStaffAppointmentsResponse extends BaseModel
{
	/**
	 * Contains information about the pagination used. ,
	 * 
	 * @var PaginationResponse 
	 */
	public $paginationResponse;
	/**
	 * Contains information about appointments and their details.
	 * 
	 * @var Appointment[] 
	 */
	public $appointments;

	protected function getInputMap()
	{
		return [
			'PaginationResponse' => ['paginationResponse', PaginationResponse::class, null],
			'Appointments' => ['appointments', 'array', Appointment::class],
			];
	}

	protected function getOutputMap()
	{
		return [
			'paginationResponse' => ['PaginationResponse', PaginationResponse::class, null],
			'appointments' => ['Appointments', 'array', Appointment::class],
			];
	}
}
