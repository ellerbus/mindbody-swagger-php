<?php

namespace App\MindBody\Apis;

use App\MindBody\Models\GetClassesRequest;
use App\MindBody\Models\GetClassesResponse;
use App\MindBody\Models\GetClassDescriptionsRequest;
use App\MindBody\Models\GetClassDescriptionsResponse;
use App\MindBody\Models\GetClassVisitsRequest;
use App\MindBody\Models\GetClassVisitsResponse;
use App\MindBody\Models\RemoveClientFromClassRequest;
use App\MindBody\Models\RemoveClientFromClassResponse;
use App\MindBody\Models\AddClientToClassRequest;
use App\MindBody\Models\AddClientToClassResponse;
use App\MindBody\Models\GetClassSchedulesRequest;
use App\MindBody\Models\GetClassSchedulesResponse;
use App\MindBody\Models\GetWaitlistEntriesRequest;
use App\MindBody\Models\GetWaitlistEntriesResponse;
use App\MindBody\Models\RemoveFromWaitlistRequest;
use App\MindBody\Models\RemoveFromWaitlistResponse;
use App\MindBody\Models\SubstituteClassTeacherRequest;
use App\MindBody\Models\SubstituteClassTeacherResponse;

class ClassApi extends BaseApi
{
	/**
	 * Constructor
	 */
	public function __construct($siteId, $authorization)
	{
		parent::__construct('class', $siteId, $authorization);
	}

	/**
	 * Get scheduled classes.
	 */
	public function GetClasses($request)
	{
		$url = $this->getFullPath('classes');

		return $this->client->get($url, $request, GetClassesResponse::class);
	}

	/**
	 * To find class descriptions associated with **scheduled classes**, pass
	 * `StaffId`, `StartClassDateTime`, `EndClassDateTime`, or `LocationId`
	 * in the request.
	 */
	public function GetClassDescriptions($request)
	{
		$url = $this->getFullPath('classdescriptions');

		return $this->client->get($url, $request, GetClassDescriptionsResponse::class);
	}

	/**
	 * Returns a list of visits that contain information for a specified
	 * class. On success, this request returns the class object in the
	 * response with a list of visits.
	 */
	public function GetClassVisits($request)
	{
		$url = $this->getFullPath('classvisits');

		return $this->client->get($url, $request, GetClassVisitsResponse::class);
	}

	/**
	 * Remove a client from a class.
	 */
	public function RemoveClientFromClass($request)
	{
		$url = $this->getFullPath('removeclientfromclass');

		return $this->client->post($url, $request, RemoveClientFromClassResponse::class);
	}

	/**
	 * This endpoint adds a client to a class or to a class waiting list. It
	 * is helpful to use this endpoint in the following situations:  * Use
	 * after calling `GET Clients` and `GET Classes` so that you are sure
	 * which client to book in which class.  * If adding a client to a class
	 * from a waiting list, use this call after you call `GET
	 * WaitlistEntries` and determine the ID of the waiting list from which
	 * you are moving the client.  * If adding a client to a class and using
	 * a pricing option that the client has already purchased, use this call
	 * after you call `GET ClientServices` to determine the ID of the pricing
	 * option that the client wants to use.    If you add a client to a class
	 * and the client purchases a new pricing option, use `GET Services`,
	 * `GET Classes`, and then `POST CheckoutShoppingCart` in place of this
	 * call.    This endpoint also supports cross-regional class bookings. If
	 * you want to perform a cross-regional class booking, set
	 * `CrossRegionalBooking` to `true`. This endpoint does not support
	 * adding a user to a waiting list using a cross-regional client pricing
	 * option(service). Cross-regional booking workflows do not support
	 * client service scheduling restrictions.    When performing a cross-
	 * regional class booking, this endpoint loops through the first ten
	 * sites that the client is associated with, looks for client pricing
	 * options at each of those sites, and then uses the oldest client
	 * pricing option found.It is important to note that this endpoint only
	 * loops through a maximum of ten associated client sites. If a
	 * `ClientID` is associated with more than ten sites in an organization,
	 * this endpoint only loops through the first ten.If you know that a
	 * client has a client service at another site, you can specify that site
	 * using the `CrossRegionalBookingClientServiceSiteId` query parameter.
	 * If you perform a cross-regional booking, two additional fields are
	 * included in the `SessionType` object of the response:  * `SiteID`,
	 * which specifies where the client service is coming from  *
	 * `CrossRegionalBookingPerformed`, a Boolean field that is set to `true`
	 * As a prerequisite to using this endpoint, your `SourceName` must have
	 * been granted access to the organization to which the site belongs.
	 */
	public function AddClientToClass($request)
	{
		$url = $this->getFullPath('addclienttoclass');

		return $this->client->post($url, $request, AddClientToClassResponse::class);
	}

	/**
	 * Get class schedules.
	 */
	public function GetClassSchedules($request)
	{
		$url = $this->getFullPath('classschedules');

		return $this->client->get($url, $request, GetClassSchedulesResponse::class);
	}

	/**
	 * Returns a list of waiting list entries for a specified class schedule
	 * or class. The request requires staff credentials and either a class
	 * schedule ID or class ID.
	 */
	public function GetWaitlistEntries($request)
	{
		$url = $this->getFullPath('waitlistentries');

		return $this->client->get($url, $request, GetWaitlistEntriesResponse::class);
	}

	/**
	 * This endpoint does not return a response. If a call to this endpoint
	 * results in a 200 OK HTTP status code, then the call was successful.
	 */
	public function RemoveFromWaitlist($request)
	{
		$url = $this->getFullPath('removefromwaitlist');

		return $this->client->post($url, $request, RemoveFromWaitlistResponse::class);
	}

	/**
	 * Substitute a class teacher.
	 */
	public function SubstituteClassTeacher($request)
	{
		$url = $this->getFullPath('substituteclassteacher');

		return $this->client->post($url, $request, SubstituteClassTeacherResponse::class);
	}

}
