<?php

namespace App\MindBody\Apis;

use App\MindBody\Models\AddAppointmentRequest;
use App\MindBody\Models\AddAppointmentResponse;
use App\MindBody\Models\UpdateAppointmentRequest;
use App\MindBody\Models\UpdateAppointmentResponse;
use App\MindBody\Models\GetBookableItemsRequest;
use App\MindBody\Models\GetBookableItemsResponse;
use App\MindBody\Models\GetActiveSessionTimesRequest;
use App\MindBody\Models\GetActiveSessionTimesResponse;
use App\MindBody\Models\GetScheduleItemsRequest;
use App\MindBody\Models\GetScheduleItemsResponse;
use App\MindBody\Models\GetAppointmentOptionsResponse;
use App\MindBody\Models\GetStaffAppointmentsRequest;
use App\MindBody\Models\GetStaffAppointmentsResponse;

class AppointmentApi extends BaseApi
{
	/**
	 * Constructor
	 */
	public function __construct($siteId, $authorization)
	{
		parent::__construct('appointment', $siteId, $authorization);
	}

	/**
	 * To book an appointment, you must use a location ID, staff ID, client
	 * ID, session type ID, and the `StartDateTime` of the appointment. You
	 * can get most of this information using `GET BookableItems`.
	 */
	public function AddApppointment($request)
	{
		$url = $this->getFullPath('addappointment');

		return $this->client->post($url, $request, AddAppointmentResponse::class);
	}

	/**
	 * To update the information for a specific appointment, you must have a
	 * staff user token with the proper permissions. Note that you can only
	 * update the appointment’s `StartDateTime`, `EndDateTime`, `StaffId`,
	 * `Notes`, and `SessionTypeId`.
	 */
	public function UpdateApppointment($request)
	{
		$url = $this->getFullPath('updateappointment');

		return $this->client->post($url, $request, UpdateAppointmentResponse::class);
	}

	/**
	 * Returns a list of availabilities with the information needed to book
	 * appointments. Availabilities include information such as the location
	 * and its amenities, staff members, programs, and session types.
	 */
	public function GetBookableItems($request)
	{
		$url = $this->getFullPath('bookableitems');

		return $this->client->get($url, $request, GetBookableItemsResponse::class);
	}

	/**
	 * Returns a list of the times that can be booked for a given program
	 * schedule type. `ActiveSessionTimes` represent the scheduling
	 * increments that can be booked during the active business hours for
	 * services.
	 */
	public function GetActiveSessionTimes($request)
	{
		$url = $this->getFullPath('activesessiontimes');

		return $this->client->get($url, $request, GetActiveSessionTimesResponse::class);
	}

	/**
	 * Returns a list of schedule items, including appointments,
	 * availabilities, and unavailabilities. Unavailabilities are the times
	 * at which appointments cannot be booked, for example, on holidays or
	 * after hours when the business is closed.
	 */
	public function GetScheduleItems($request)
	{
		$url = $this->getFullPath('scheduleitems');

		return $this->client->get($url, $request, GetScheduleItemsResponse::class);
	}

	/**
	 * This endpoint has no query parameters.
	 */
	public function GetAppointmentOptions()
	{
		$url = $this->getFullPath('appointmentoptions');

		return $this->client->get($url, null, GetAppointmentOptionsResponse::class);
	}

	/**
	 * Returns a list of appointments by staff member.
	 */
	public function GetStaffAppointments($request)
	{
		$url = $this->getFullPath('staffappointments');

		return $this->client->get($url, $request, GetStaffAppointmentsResponse::class);
	}

}
