<?php

namespace App\MindBody\Apis;

use App\MindBody\Models\GetClientsRequest;
use App\MindBody\Models\GetClientsResponse;
use App\MindBody\Models\GetClientFormulaNotesRequest;
use App\MindBody\Models\GetClientFormulaNotesResponse;
use App\MindBody\Models\UploadClientDocumentRequest;
use App\MindBody\Models\UploadClientDocumentResponse;
use App\MindBody\Models\UploadClientPhotoRequest;
use App\MindBody\Models\UploadClientPhotoResponse;
use App\MindBody\Models\GetClientContractsRequest;
use App\MindBody\Models\GetClientContractsResponse;
use App\MindBody\Models\GetClientServicesRequest;
use App\MindBody\Models\GetClientServicesResponse;
use App\MindBody\Models\GetClientVisitsRequest;
use App\MindBody\Models\GetClientVisitsResponse;
use App\MindBody\Models\GetActiveClientMembershipsRequest;
use App\MindBody\Models\GetActiveClientMembershipsResponse;
use App\MindBody\Models\GetRequiredClientFieldsResponse;
use App\MindBody\Models\GetClientReferralTypesRequest;
use App\MindBody\Models\GetClientReferralTypesResponse;
use App\MindBody\Models\GetClientAccountBalancesRequest;
use App\MindBody\Models\GetClientAccountBalancesResponse;
use App\MindBody\Models\GetClientPurchasesRequest;
use App\MindBody\Models\GetClientPurchasesResponse;
use App\MindBody\Models\GetClientIndexesRequest;
use App\MindBody\Models\GetClientIndexesResponse;
use App\MindBody\Models\GetCustomClientFieldsRequest;
use App\MindBody\Models\GetCustomClientFieldsResponse;
use App\MindBody\Models\AddContactLogRequest;
use App\MindBody\Models\ContactLog;
use App\MindBody\Models\UpdateContactLogRequest;
use App\MindBody\Models\ContactLog;
use App\MindBody\Models\GetCrossRegionalClientAssociationsRequest;
use App\MindBody\Models\GetCrossRegionalClientAssociationsResponse;
use App\MindBody\Models\AddClientRequest;
use App\MindBody\Models\AddClientResponse;
use App\MindBody\Models\UpdateClientRequest;
use App\MindBody\Models\UpdateClientResponse;
use App\MindBody\Models\UpdateClientVisitRequest;
use App\MindBody\Models\UpdateClientVisitResponse;
use App\MindBody\Models\AddArrivalRequest;
use App\MindBody\Models\AddArrivalResponse;
use App\MindBody\Models\SendPasswordResetEmailRequest;
use App\MindBody\Models\GetContactLogsRequest;
use App\MindBody\Models\GetContactLogsResponse;
use App\MindBody\Models\UpdateClientServiceRequest;
use App\MindBody\Models\UpdateClientServiceResponse;
use App\MindBody\Models\GetDirectDebitInfoRequest;
use App\MindBody\Models\DirectDebitInfo;
use App\MindBody\Models\DeleteDirectDebitInfoRequest;
use App\MindBody\Models\AddClientDirectDebitInfoRequest;
use App\MindBody\Models\AddClientDirectDebitInfoResponse;

class ClientApi extends BaseApi
{
	/**
	 * Constructor
	 */
	public function __construct($siteId, $authorization)
	{
		parent::__construct('client', $siteId, $authorization);
	}

	/**
	 * Get clients.
	 */
	public function GetClients($request)
	{
		$url = $this->getFullPath('clients');
		$siteId = $this->siteId;
		$auth = $this->authorization;

		return $this->client->get($url, $siteId, $auth, $request, GetClientsResponse::class);
	}

	/**
	 * Get a client's formula notes.
	 */
	public function GetClientFormulaNotes($request)
	{
		$url = $this->getFullPath('clientformulanotes');
		$siteId = $this->siteId;
		$auth = $this->authorization;

		return $this->client->get($url, $siteId, $auth, $request, GetClientFormulaNotesResponse::class);
	}

	/**
	 * Returns a string representation of the image byte array. The maximum
	 * document size is 1MB.    The maximum size file that can be uploaded is
	 * 4 MB.
	 */
	public function UploadClientDocument($request)
	{
		$url = $this->getFullPath('uploadclientdocument');
		$siteId = $this->siteId;
		$auth = $this->authorization;

		return $this->client->post($url, $siteId, $auth, $request, UploadClientDocumentResponse::class);
	}

	/**
	 * The maximum file size is 4 MB and acceptable file types are:  * bmp  *
	 * jpeg  * gif  * tiff  * png
	 */
	public function UploadClientPhoto($request)
	{
		$url = $this->getFullPath('uploadclientphoto');
		$siteId = $this->siteId;
		$auth = $this->authorization;

		return $this->client->post($url, $siteId, $auth, $request, UploadClientPhotoResponse::class);
	}

	/**
	 * Get contracts that a client has purchased.
	 */
	public function GetClientContracts($request)
	{
		$url = $this->getFullPath('clientcontracts');
		$siteId = $this->siteId;
		$auth = $this->authorization;

		return $this->client->get($url, $siteId, $auth, $request, GetClientContractsResponse::class);
	}

	/**
	 * Get pricing options that a client has purchased.
	 */
	public function GetClientServices($request)
	{
		$url = $this->getFullPath('clientservices');
		$siteId = $this->siteId;
		$auth = $this->authorization;

		return $this->client->get($url, $siteId, $auth, $request, GetClientServicesResponse::class);
	}

	/**
	 * Get a client's visit history.
	 */
	public function GetClientVisits($request)
	{
		$url = $this->getFullPath('clientvisits');
		$siteId = $this->siteId;
		$auth = $this->authorization;

		return $this->client->get($url, $siteId, $auth, $request, GetClientVisitsResponse::class);
	}

	/**
	 * Get a client's active memberships.
	 */
	public function GetActiveClientMemberships($request)
	{
		$url = $this->getFullPath('activeclientmemberships');
		$siteId = $this->siteId;
		$auth = $this->authorization;

		return $this->client->get($url, $siteId, $auth, $request, GetActiveClientMembershipsResponse::class);
	}

	/**
	 * Gets the list of fields that a new client has to fill out in business
	 * mode, specifically for the sign-up process. `AddClient` and
	 * `UpdateClient` validate against these fields.    This endpoint has no
	 * query parameters.
	 */
	public function GetRequiredClientFields()
	{
		$url = $this->getFullPath('requiredclientfields');
		$siteId = $this->siteId;
		$auth = $this->authorization;

		return $this->client->get($url, $siteId, $auth, null, GetRequiredClientFieldsResponse::class);
	}

	/**
	 * Gets a list of referral types. Referral types are options that new
	 * clients can choose to identify how they learned about the business.
	 * Referral types are typically used for the sign-up process.
	 */
	public function GetClientReferralTypes($request)
	{
		$url = $this->getFullPath('clientreferraltypes');
		$siteId = $this->siteId;
		$auth = $this->authorization;

		return $this->client->get($url, $siteId, $auth, $request, GetClientReferralTypesResponse::class);
	}

	/**
	 * Get account balance information for one or more client(s).
	 */
	public function GetClientAccountBalances($request)
	{
		$url = $this->getFullPath('clientaccountbalances');
		$siteId = $this->siteId;
		$auth = $this->authorization;

		return $this->client->get($url, $siteId, $auth, $request, GetClientAccountBalancesResponse::class);
	}

	/**
	 * Get a client's purchase history.
	 */
	public function GetClientPurchases($request)
	{
		$url = $this->getFullPath('clientpurchases');
		$siteId = $this->siteId;
		$auth = $this->authorization;

		return $this->client->get($url, $siteId, $auth, $request, GetClientPurchasesResponse::class);
	}

	/**
	 * Client indexes are used to analyze client demographics. A business
	 * owner can set up different categories with sets of values which they
	 * can assign to each client. Client indexes are used in client searches,
	 * for tagging clients so that the owner can send mass emails to similar
	 * groups, and for many reports.    For more information, see Client
	 * Indexes and [Client Index Values (video tutorial)](https://support.min
	 * dbodyonline.com/s/article/203261653-Client-indexes-and-client-index-
	 * values-video-tutorial?language=en_USclient).
	 */
	public function GetClientIndexes($request)
	{
		$url = $this->getFullPath('clientindexes');
		$siteId = $this->siteId;
		$auth = $this->authorization;

		return $this->client->get($url, $siteId, $auth, $request, GetClientIndexesResponse::class);
	}

	/**
	 * Get a site's configured custom client fields.
	 */
	public function GetCustomClientFields($request)
	{
		$url = $this->getFullPath('customclientfields');
		$siteId = $this->siteId;
		$auth = $this->authorization;

		return $this->client->get($url, $siteId, $auth, $request, GetCustomClientFieldsResponse::class);
	}

	/**
	 * Add a contact log to a client's account.
	 */
	public function AddContactLog($request)
	{
		$url = $this->getFullPath('addcontactlog');
		$siteId = $this->siteId;
		$auth = $this->authorization;

		return $this->client->post($url, $siteId, $auth, $request, ContactLog::class);
	}

	/**
	 * Update a contact log on a client's account.
	 */
	public function UpdateContactLog($request)
	{
		$url = $this->getFullPath('updatecontactlog');
		$siteId = $this->siteId;
		$auth = $this->authorization;

		return $this->client->post($url, $siteId, $auth, $request, ContactLog::class);
	}

	/**
	 * Returns a list of sites that a particular client ID (also referred to
	 * as an RSSID) or a client email address is associated with in a cross-
	 * regional organization. Either the `ClientID` or `Email` parameter is
	 * required. If both are provided, the `ClientID` is used.    Use this
	 * endpoint to retrieve information for other Public API endpoints, about
	 * the same client at multiple sites within an organization. To use this
	 * endpoint, your developer account must have been granted permission to
	 * the site’s entire organization.    Note that this endpoint does not
	 * work on the Developer Sandbox site, as it is not set up for cross-
	 * regional use cases.
	 */
	public function GetCrossRegionalClientAssociations($request)
	{
		$url = $this->getFullPath('crossregionalclientassociations');
		$siteId = $this->siteId;
		$auth = $this->authorization;

		return $this->client->get($url, $siteId, $auth, $request, GetCrossRegionalClientAssociationsResponse::class);
	}

	/**
	 * The `FirstName` and `LastName` parameters are always required in this
	 * request. All other parameters are optional, but note that any of the
	 * optional parameters could be required by a particular business,
	 * depending on how the business has configured the site settings.    Use
	 * after calling the `GetRequiredClientFields` endpoint to make sure you
	 * are collecting all required pieces of information.
	 */
	public function AddClient($request)
	{
		$url = $this->getFullPath('addclient');
		$siteId = $this->siteId;
		$auth = $this->authorization;

		return $this->client->post($url, $siteId, $auth, $request, AddClientResponse::class);
	}

	/**
	 * Updates an existing client for a specific subscriber. Use this
	 * endpoint as follows:  * If you need to update the `ReferredBy`
	 * parameter, use this endpoint after calling `GET ClientReferralTypes`.
	 * * When updating a client’s home location, use after calling `GET
	 * Locations`.  * If you are updating a client’s stored credit card,
	 * use after calling `GET AcceptedCardTypes` so that you can make sure
	 * the card is a type that is accepted at the subscriber.  If this
	 * endpoint is used on a cross-regional site, passing in a client’s
	 * RSSID and email address creates a cross-regional link. This means that
	 * the client is created in cross-regional sites where the client does
	 * not exist and `GET CrossRegionalClientAssociations` returns all
	 * appropriate cross-regional sites. When `CrossRegionalUpdate` is
	 * omitted or set to `true`, the client’s updated information is
	 * propagated to all of the region’s sites. If `CrossRegionalUpdate` is
	 * set to `false`, only the local client is updated.    Note that the
	 * following items cannot be updated for a cross-regional client:  *
	 * `ClientIndexes`  * `ClientRelationships`  * `CustomClientFields`  *
	 * `SalesReps`  * `SendAccountEmails`  * `SendAccountTexts`  *
	 * `SendPromotionalEmails`  * `SendPromotionalTexts`  *
	 * `SendScheduleEmails`  * `SendScheduleTexts`
	 */
	public function UpdateClient($request)
	{
		$url = $this->getFullPath('updateclient');
		$siteId = $this->siteId;
		$auth = $this->authorization;

		return $this->client->post($url, $siteId, $auth, $request, UpdateClientResponse::class);
	}

	/**
	 * Update a client's visit.
	 */
	public function UpdateClientVisit($request)
	{
		$url = $this->getFullPath('updateclientvisit');
		$siteId = $this->siteId;
		$auth = $this->authorization;

		return $this->client->post($url, $siteId, $auth, $request, UpdateClientVisitResponse::class);
	}

	/**
	 * Add an arrival for a client.
	 */
	public function AddArrival($request)
	{
		$url = $this->getFullPath('addarrival');
		$siteId = $this->siteId;
		$auth = $this->authorization;

		return $this->client->post($url, $siteId, $auth, $request, AddArrivalResponse::class);
	}

	/**
	 * Send a password reset email to a client.
	 */
	public function SendPasswordResetEmail($request)
	{
		$url = $this->getFullPath('sendpasswordresetemail');
		$siteId = $this->siteId;
		$auth = $this->authorization;

		return $this->client->post($url, $siteId, $auth, $request, null);
	}

	/**
	 * This endpoint contains a variety of filters that can return not just
	 * all contact logs, but also system-generated contact logs, contact logs
	 * assigned to specific staff members, and contact logs of specific types
	 * or subtypes.
	 */
	public function GetContactLogs($request)
	{
		$url = $this->getFullPath('contactlogs');
		$siteId = $this->siteId;
		$auth = $this->authorization;

		return $this->client->get($url, $siteId, $auth, $request, GetContactLogsResponse::class);
	}

	/**
	 * Updates the active date and/or expiration date of a client pricing
	 * option. This request requires staff user credentials. If the active
	 * date is modified, the expiration date is also modified accordingly. If
	 * the expiration date is modified, the active date is unchanged.
	 */
	public function UpdateClientService($request)
	{
		$url = $this->getFullPath('updateclientservice');
		$siteId = $this->siteId;
		$auth = $this->authorization;

		return $this->client->post($url, $siteId, $auth, $request, UpdateClientServiceResponse::class);
	}

	/**
	 * Get direct debit info for a client.
	 */
	public function GetDirectDebitInfo($request)
	{
		$url = $this->getFullPath('clientdirectdebitinfo');
		$siteId = $this->siteId;
		$auth = $this->authorization;

		return $this->client->get($url, $siteId, $auth, $request, DirectDebitInfo::class);
	}

	/**
	 * Delete direct debit info for a client.
	 */
	public function DeleteDirectDebitInfo($request)
	{
		$url = $this->getFullPath('clientdirectdebitinfo');
		$siteId = $this->siteId;
		$auth = $this->authorization;

		return $this->client->delete($url, $siteId, $auth, $request, null);
	}

	/**
	 * no description available
	 */
	public function AddClientDirectDebitInfo($request)
	{
		$url = $this->getFullPath('addclientdirectdebitinfo');
		$siteId = $this->siteId;
		$auth = $this->authorization;

		return $this->client->post($url, $siteId, $auth, $request, AddClientDirectDebitInfoResponse::class);
	}

}
