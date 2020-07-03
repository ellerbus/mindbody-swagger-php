<?php

namespace App\Mindbody\Apis;

use App\Mindbody\Models\AddAppointmentRequest;
use App\Mindbody\Models\AddAppointmentResponse;
use App\Mindbody\Models\UpdateAppointmentRequest;
use App\Mindbody\Models\UpdateAppointmentResponse;
use App\Mindbody\Models\GetBookableItemsRequest;
use App\Mindbody\Models\GetBookableItemsResponse;
use App\Mindbody\Models\GetActiveSessionTimesRequest;
use App\Mindbody\Models\GetActiveSessionTimesResponse;
use App\Mindbody\Models\GetScheduleItemsRequest;
use App\Mindbody\Models\GetScheduleItemsResponse;
use App\Mindbody\Models\GetAppointmentOptionsResponse;
use App\Mindbody\Models\GetStaffAppointmentsRequest;
use App\Mindbody\Models\GetStaffAppointmentsResponse;

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
	public function addApppointment($request)
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
	public function updateApppointment($request)
	{
		$url = $this->getFullPath('updateappointment');

		return $this->client->post($url, $request, UpdateAppointmentResponse::class);
	}

	/**
	 * Returns a list of availabilities with the information needed to book
	 * appointments. Availabilities include information such as the location
	 * and its amenities, staff members, programs, and session types.
	 */
	public function getBookableItems($request)
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
	public function getActiveSessionTimes($request)
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
	public function getScheduleItems($request)
	{
		$url = $this->getFullPath('scheduleitems');

		return $this->client->get($url, $request, GetScheduleItemsResponse::class);
	}

	/**
	 * This endpoint has no query parameters.
	 */
	public function getAppointmentOptions()
	{
		$url = $this->getFullPath('appointmentoptions');

		return $this->client->get($url, null, GetAppointmentOptionsResponse::class);
	}

	/**
	 * Returns a list of appointments by staff member.
	 */
	public function getStaffAppointments($request)
	{
		$url = $this->getFullPath('staffappointments');

		return $this->client->get($url, $request, GetStaffAppointmentsResponse::class);
	}

}
