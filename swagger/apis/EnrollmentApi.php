<?php

namespace App\MindBody\Clients;

use App\MindBody\Models\AddClientToEnrollmentRequest;
use App\MindBody\Models\ClassSchedule;
use App\MindBody\Models\GetEnrollmentsRequest;
use App\MindBody\Models\GetEnrollmentsResponse;

class EnrollmentApi extends BaseApi
{
	/*
	 * Constructor
	 */
	public function __construct($siteId, $authorization)
	{
		parent::__construct('enrollment', $siteId, $authorization);
	}

	/*
	 * Book a client into an enrollment.
	 */
	public function AddClientToEnrollment($request)
	{
		$url = $this->getFullPath('addclienttoenrollment');
		$siteId = $this->siteId;
		$auth = $this->authorization;

		return $this->client->post($url, $siteId, $auth, $request, ClassSchedule::class);
	}

	/*
	 * Returns a list of enrollments. An enrollment is a service, such as a
	 * workshop or an event, that a staff member offers to multiple students,
	 * who commit to coming to all or most of the scheduled sessions.
	 * Enrollments typically run for a limited time only.
	 */
	public function GetEnrollments($request)
	{
		$url = $this->getFullPath('enrollments');
		$siteId = $this->siteId;
		$auth = $this->authorization;

		return $this->client->get($url, $siteId, $auth, $request, GetEnrollmentsResponse::class);
	}

}
