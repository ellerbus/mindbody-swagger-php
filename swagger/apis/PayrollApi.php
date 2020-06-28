<?php

namespace App\MindBody\Apis;

use App\MindBody\Models\GetScheduledServiceEarningsRequest;
use App\MindBody\Models\GetScheduledServiceEarningsResponse;
use App\MindBody\Models\GetTimeCardsRequest;
use App\MindBody\Models\GetTimeCardsResponse;
use App\MindBody\Models\GetCommissionsRequest;
use App\MindBody\Models\GetCommissionsResponse;
use App\MindBody\Models\GetTipsRequest;
use App\MindBody\Models\GetTipsResponse;

class PayrollApi extends BaseApi
{
	/**
	 * Constructor
	 */
	public function __construct($siteId, $authorization)
	{
		parent::__construct('payroll', $siteId, $authorization);
	}

	/**
	 * A staff authorization token is not required for this endpoint, but if
	 * one is passed, its permissions are honored. Depending on the access
	 * permissions configured for the staff member whose token is passed, the
	 * endpoint returns either only the payroll information for that staff
	 * member or it returns the payroll information for all staff members.
	 * Note that if a staff member is not paid for a class, earnings of zero
	 * are returned by this endpoint.    Note that this endpoint calculates
	 * both bonus and no-reg rates for assistants.These rates are not
	 * supported by the Payroll report in the web interface.    Note that
	 * this endpoint returns both the teacher’s adjusted rate and the
	 * assistant’s pay rate when the assistant is paid by the teacher.The
	 * Payroll report in the web interface only returns the teacher’s
	 * adjusted rate.
	 */
	public function GetScheduledServiceEarnings($request)
	{
		$url = $this->getFullPath('scheduledserviceearnings');

		return $this->client->get($url, $request, GetScheduledServiceEarningsResponse::class);
	}

	/**
	 * Get time card payroll for staff members.
	 */
	public function GetTimeCards($request)
	{
		$url = $this->getFullPath('timecards');

		return $this->client->get($url, $request, GetTimeCardsResponse::class);
	}

	/**
	 * A staff authorization token is not required for this endpoint, but if
	 * one is passed, its permissions are honored. Depending on the access
	 * permissions configured for the staff member whose token is passed, the
	 * endpoint returns either only the payroll information for that staff
	 * member or it returns the payroll information for all staff members.
	 */
	public function GetCommissions($request)
	{
		$url = $this->getFullPath('commissions');

		return $this->client->get($url, $request, GetCommissionsResponse::class);
	}

	/**
	 * Get tips for staff members.
	 */
	public function GetTips($request)
	{
		$url = $this->getFullPath('tips');

		return $this->client->get($url, $request, GetTipsResponse::class);
	}

}
