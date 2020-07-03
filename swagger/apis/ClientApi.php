<?php

namespace App\Mindbody\Apis;

use App\Mindbody\Models\GetClientsRequest;
use App\Mindbody\Models\GetClientsResponse;
use App\Mindbody\Models\GetClientFormulaNotesRequest;
use App\Mindbody\Models\GetClientFormulaNotesResponse;
use App\Mindbody\Models\UploadClientDocumentRequest;
use App\Mindbody\Models\UploadClientDocumentResponse;
use App\Mindbody\Models\UploadClientPhotoRequest;
use App\Mindbody\Models\UploadClientPhotoResponse;
use App\Mindbody\Models\GetClientContractsRequest;
use App\Mindbody\Models\GetClientContractsResponse;
use App\Mindbody\Models\GetClientServicesRequest;
use App\Mindbody\Models\GetClientServicesResponse;
use App\Mindbody\Models\GetClientVisitsRequest;
use App\Mindbody\Models\GetClientVisitsResponse;
use App\Mindbody\Models\GetActiveClientMembershipsRequest;
use App\Mindbody\Models\GetActiveClientMembershipsResponse;
use App\Mindbody\Models\GetRequiredClientFieldsResponse;
use App\Mindbody\Models\GetClientReferralTypesRequest;
use App\Mindbody\Models\GetClientReferralTypesResponse;
use App\Mindbody\Models\GetClientAccountBalancesRequest;
use App\Mindbody\Models\GetClientAccountBalancesResponse;
use App\Mindbody\Models\GetClientPurchasesRequest;
use App\Mindbody\Models\GetClientPurchasesResponse;
use App\Mindbody\Models\GetClientIndexesRequest;
use App\Mindbody\Models\GetClientIndexesResponse;
use App\Mindbody\Models\GetCustomClientFieldsRequest;
use App\Mindbody\Models\GetCustomClientFieldsResponse;
use App\Mindbody\Models\AddContactLogRequest;
use App\Mindbody\Models\ContactLog;
use App\Mindbody\Models\UpdateContactLogRequest;
use App\Mindbody\Models\ContactLog;
use App\Mindbody\Models\GetCrossRegionalClientAssociationsRequest;
use App\Mindbody\Models\GetCrossRegionalClientAssociationsResponse;
use App\Mindbody\Models\AddClientRequest;
use App\Mindbody\Models\AddClientResponse;
use App\Mindbody\Models\UpdateClientRequest;
use App\Mindbody\Models\UpdateClientResponse;
use App\Mindbody\Models\UpdateClientVisitRequest;
use App\Mindbody\Models\UpdateClientVisitResponse;
use App\Mindbody\Models\AddArrivalRequest;
use App\Mindbody\Models\AddArrivalResponse;
use App\Mindbody\Models\SendPasswordResetEmailRequest;
use App\Mindbody\Models\GetContactLogsRequest;
use App\Mindbody\Models\GetContactLogsResponse;
use App\Mindbody\Models\UpdateClientServiceRequest;
use App\Mindbody\Models\UpdateClientServiceResponse;
use App\Mindbody\Models\GetDirectDebitInfoRequest;
use App\Mindbody\Models\DirectDebitInfo;
use App\Mindbody\Models\DeleteDirectDebitInfoRequest;
use App\Mindbody\Models\AddClientDirectDebitInfoRequest;
use App\Mindbody\Models\AddClientDirectDebitInfoResponse;

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
	public function getClients($request)
	{
		$url = $this->getFullPath('clients');

		return $this->client->get($url, $request, GetClientsResponse::class);
	}

	/**
	 * Get a client's formula notes.
	 */
	public function getClientFormulaNotes($request)
	{
		$url = $this->getFullPath('clientformulanotes');

		return $this->client->get($url, $request, GetClientFormulaNotesResponse::class);
	}

	/**
	 * Returns a string representation of the image byte array. The maximum
	 * document size is 1MB.    The maximum size file that can be uploaded is
	 * 4 MB.
	 */
	public function uploadClientDocument($request)
	{
		$url = $this->getFullPath('uploadclientdocument');

		return $this->client->post($url, $request, UploadClientDocumentResponse::class);
	}

	/**
	 * The maximum file size is 4 MB and acceptable file types are:  * bmp  *
	 * jpeg  * gif  * tiff  * png
	 */
	public function uploadClientPhoto($request)
	{
		$url = $this->getFullPath('uploadclientphoto');

		return $this->client->post($url, $request, UploadClientPhotoResponse::class);
	}

	/**
	 * Get contracts that a client has purchased.
	 */
	public function getClientContracts($request)
	{
		$url = $this->getFullPath('clientcontracts');

		return $this->client->get($url, $request, GetClientContractsResponse::class);
	}

	/**
	 * Get pricing options that a client has purchased.
	 */
	public function getClientServices($request)
	{
		$url = $this->getFullPath('clientservices');

		return $this->client->get($url, $request, GetClientServicesResponse::class);
	}

	/**
	 * Get a client's visit history.
	 */
	public function getClientVisits($request)
	{
		$url = $this->getFullPath('clientvisits');

		return $this->client->get($url, $request, GetClientVisitsResponse::class);
	}

	/**
	 * Get a client's active memberships.
	 */
	public function getActiveClientMemberships($request)
	{
		$url = $this->getFullPath('activeclientmemberships');

		return $this->client->get($url, $request, GetActiveClientMembershipsResponse::class);
	}

	/**
	 * Gets the list of fields that a new client has to fill out in business
	 * mode, specifically for the sign-up process. `AddClient` and
	 * `UpdateClient` validate against these fields.    This endpoint has no
	 * query parameters.
	 */
	public function getRequiredClientFields()
	{
		$url = $this->getFullPath('requiredclientfields');

		return $this->client->get($url, null, GetRequiredClientFieldsResponse::class);
	}

	/**
	 * Gets a list of referral types. Referral types are options that new
	 * clients can choose to identify how they learned about the business.
	 * Referral types are typically used for the sign-up process.
	 */
	public function getClientReferralTypes($request)
	{
		$url = $this->getFullPath('clientreferraltypes');

		return $this->client->get($url, $request, GetClientReferralTypesResponse::class);
	}

	/**
	 * Get account balance information for one or more client(s).
	 */
	public function getClientAccountBalances($request)
	{
		$url = $this->getFullPath('clientaccountbalances');

		return $this->client->get($url, $request, GetClientAccountBalancesResponse::class);
	}

	/**
	 * Get a client's purchase history.
	 */
	public function getClientPurchases($request)
	{
		$url = $this->getFullPath('clientpurchases');

		return $this->client->get($url, $request, GetClientPurchasesResponse::class);
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
	public function getClientIndexes($request)
	{
		$url = $this->getFullPath('clientindexes');

		return $this->client->get($url, $request, GetClientIndexesResponse::class);
	}

	/**
	 * Get a site's configured custom client fields.
	 */
	public function getCustomClientFields($request)
	{
		$url = $this->getFullPath('customclientfields');

		return $this->client->get($url, $request, GetCustomClientFieldsResponse::class);
	}

	/**
	 * Add a contact log to a client's account.
	 */
	public function addContactLog($request)
	{
		$url = $this->getFullPath('addcontactlog');

		return $this->client->post($url, $request, ContactLog::class);
	}

	/**
	 * Update a contact log on a client's account.
	 */
	public function updateContactLog($request)
	{
		$url = $this->getFullPath('updatecontactlog');

		return $this->client->post($url, $request, ContactLog::class);
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
	public function getCrossRegionalClientAssociations($request)
	{
		$url = $this->getFullPath('crossregionalclientassociations');

		return $this->client->get($url, $request, GetCrossRegionalClientAssociationsResponse::class);
	}

	/**
	 * The `FirstName` and `LastName` parameters are always required in this
	 * request. All other parameters are optional, but note that any of the
	 * optional parameters could be required by a particular business,
	 * depending on how the business has configured the site settings.    Use
	 * after calling the `GetRequiredClientFields` endpoint to make sure you
	 * are collecting all required pieces of information.
	 */
	public function addClient($request)
	{
		$url = $this->getFullPath('addclient');

		return $this->client->post($url, $request, AddClientResponse::class);
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
	public function updateClient($request)
	{
		$url = $this->getFullPath('updateclient');

		return $this->client->post($url, $request, UpdateClientResponse::class);
	}

	/**
	 * Update a client's visit.
	 */
	public function updateClientVisit($request)
	{
		$url = $this->getFullPath('updateclientvisit');

		return $this->client->post($url, $request, UpdateClientVisitResponse::class);
	}

	/**
	 * Add an arrival for a client.
	 */
	public function addArrival($request)
	{
		$url = $this->getFullPath('addarrival');

		return $this->client->post($url, $request, AddArrivalResponse::class);
	}

	/**
	 * Send a password reset email to a client.
	 */
	public function sendPasswordResetEmail($request)
	{
		$url = $this->getFullPath('sendpasswordresetemail');

		return $this->client->post($url, $request, null);
	}

	/**
	 * This endpoint contains a variety of filters that can return not just
	 * all contact logs, but also system-generated contact logs, contact logs
	 * assigned to specific staff members, and contact logs of specific types
	 * or subtypes.
	 */
	public function getContactLogs($request)
	{
		$url = $this->getFullPath('contactlogs');

		return $this->client->get($url, $request, GetContactLogsResponse::class);
	}

	/**
	 * Updates the active date and/or expiration date of a client pricing
	 * option. This request requires staff user credentials. If the active
	 * date is modified, the expiration date is also modified accordingly. If
	 * the expiration date is modified, the active date is unchanged.
	 */
	public function updateClientService($request)
	{
		$url = $this->getFullPath('updateclientservice');

		return $this->client->post($url, $request, UpdateClientServiceResponse::class);
	}

	/**
	 * Get direct debit info for a client.
	 */
	public function getDirectDebitInfo($request)
	{
		$url = $this->getFullPath('clientdirectdebitinfo');

		return $this->client->get($url, $request, DirectDebitInfo::class);
	}

	/**
	 * Delete direct debit info for a client.
	 */
	public function deleteDirectDebitInfo($request)
	{
		$url = $this->getFullPath('clientdirectdebitinfo');

		return $this->client->delete($url, $request, null);
	}

	/**
	 * no description available
	 */
	public function addClientDirectDebitInfo($request)
	{
		$url = $this->getFullPath('addclientdirectdebitinfo');

		return $this->client->post($url, $request, AddClientDirectDebitInfoResponse::class);
	}

}
