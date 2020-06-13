from .base_api import BaseApi

from ..models.get_clients_request import GetClientsRequest
from ..models.get_clients_response import GetClientsResponse
from ..models.get_clientformulanotes_request import GetClientformulanotesRequest
from ..models.get_client_formula_notes_response import GetClientFormulaNotesResponse
from ..models.upload_client_document_request import UploadClientDocumentRequest
from ..models.upload_client_document_response import UploadClientDocumentResponse
from ..models.upload_client_photo_request import UploadClientPhotoRequest
from ..models.upload_client_photo_response import UploadClientPhotoResponse
from ..models.get_clientcontracts_request import GetClientcontractsRequest
from ..models.get_client_contracts_response import GetClientContractsResponse
from ..models.get_clientservices_request import GetClientservicesRequest
from ..models.get_client_services_response import GetClientServicesResponse
from ..models.get_clientvisits_request import GetClientvisitsRequest
from ..models.get_client_visits_response import GetClientVisitsResponse
from ..models.get_activeclientmemberships_request import GetActiveclientmembershipsRequest
from ..models.get_active_client_memberships_response import GetActiveClientMembershipsResponse
from ..models.get_required_client_fields_response import GetRequiredClientFieldsResponse
from ..models.get_clientreferraltypes_request import GetClientreferraltypesRequest
from ..models.get_client_referral_types_response import GetClientReferralTypesResponse
from ..models.get_clientaccountbalances_request import GetClientaccountbalancesRequest
from ..models.get_client_account_balances_response import GetClientAccountBalancesResponse
from ..models.get_clientpurchases_request import GetClientpurchasesRequest
from ..models.get_client_purchases_response import GetClientPurchasesResponse
from ..models.get_clientindexes_request import GetClientindexesRequest
from ..models.get_client_indexes_response import GetClientIndexesResponse
from ..models.get_customclientfields_request import GetCustomclientfieldsRequest
from ..models.get_custom_client_fields_response import GetCustomClientFieldsResponse
from ..models.add_contact_log_request import AddContactLogRequest
from ..models.contact_log import ContactLog
from ..models.update_contact_log_request import UpdateContactLogRequest
from ..models.contact_log import ContactLog
from ..models.get_crossregionalclientassociations_request import GetCrossregionalclientassociationsRequest
from ..models.get_cross_regional_client_associations_response import GetCrossRegionalClientAssociationsResponse
from ..models.add_client_request import AddClientRequest
from ..models.add_client_response import AddClientResponse
from ..models.update_client_request import UpdateClientRequest
from ..models.update_client_response import UpdateClientResponse
from ..models.update_client_visit_request import UpdateClientVisitRequest
from ..models.update_client_visit_response import UpdateClientVisitResponse
from ..models.add_arrival_request import AddArrivalRequest
from ..models.add_arrival_response import AddArrivalResponse
from ..models.send_password_reset_email_request import SendPasswordResetEmailRequest
from ..models.get_contactlogs_request import GetContactlogsRequest
from ..models.get_contact_logs_response import GetContactLogsResponse
from ..models.update_client_service_request import UpdateClientServiceRequest
from ..models.update_client_service_response import UpdateClientServiceResponse
from ..models.get_clientdirectdebitinfo_request import GetClientdirectdebitinfoRequest
from ..models.direct_debit_info import DirectDebitInfo
from ..models.delete_clientdirectdebitinfo_request import DeleteClientdirectdebitinfoRequest
from ..models.add_client_direct_debit_info_request import AddClientDirectDebitInfoRequest
from ..models.add_client_direct_debit_info_response import AddClientDirectDebitInfoResponse

class ClientApi(BaseApi):
	def __init__(self, site_id, authorization):
		super().__init__('client', site_id, authorization)

	def get_clients(self, request):
		"""
		Get clients.
		"""

		url = self.get_fullpath('clients')
		return self.client.get(url, self.site_id, self.authorization, request, GetClientsResponse)

	def get_clientformulanotes(self, request):
		"""
		Get a client's formula notes.
		"""

		url = self.get_fullpath('clientformulanotes')
		return self.client.get(url, self.site_id, self.authorization, request, GetClientFormulaNotesResponse)

	def post_uploadclientdocument(self, request):
		"""
		Returns a string representation of the image byte array. The maximum
		document size is 1MB.    The maximum size file that can be uploaded is
		4 MB.
		"""

		url = self.get_fullpath('uploadclientdocument')
		return self.client.post(url, self.site_id, self.authorization, request, UploadClientDocumentResponse)

	def post_uploadclientphoto(self, request):
		"""
		The maximum file size is 4 MB and acceptable file types are:  * bmp  *
		jpeg  * gif  * tiff  * png
		"""

		url = self.get_fullpath('uploadclientphoto')
		return self.client.post(url, self.site_id, self.authorization, request, UploadClientPhotoResponse)

	def get_clientcontracts(self, request):
		"""
		Get contracts that a client has purchased.
		"""

		url = self.get_fullpath('clientcontracts')
		return self.client.get(url, self.site_id, self.authorization, request, GetClientContractsResponse)

	def get_clientservices(self, request):
		"""
		Get pricing options that a client has purchased.
		"""

		url = self.get_fullpath('clientservices')
		return self.client.get(url, self.site_id, self.authorization, request, GetClientServicesResponse)

	def get_clientvisits(self, request):
		"""
		Get a client's visit history.
		"""

		url = self.get_fullpath('clientvisits')
		return self.client.get(url, self.site_id, self.authorization, request, GetClientVisitsResponse)

	def get_activeclientmemberships(self, request):
		"""
		Get a client's active memberships.
		"""

		url = self.get_fullpath('activeclientmemberships')
		return self.client.get(url, self.site_id, self.authorization, request, GetActiveClientMembershipsResponse)

	def get_requiredclientfields(self):
		"""
		Gets the list of fields that a new client has to fill out in business
		mode, specifically for the sign-up process. `AddClient` and
		`UpdateClient` validate against these fields.    This endpoint has no
		query parameters.
		"""

		url = self.get_fullpath('requiredclientfields')
		return self.client.get(url, self.site_id, self.authorization, None, GetRequiredClientFieldsResponse)

	def get_clientreferraltypes(self, request):
		"""
		Gets a list of referral types. Referral types are options that new
		clients can choose to identify how they learned about the business.
		Referral types are typically used for the sign-up process.
		"""

		url = self.get_fullpath('clientreferraltypes')
		return self.client.get(url, self.site_id, self.authorization, request, GetClientReferralTypesResponse)

	def get_clientaccountbalances(self, request):
		"""
		Get account balance information for one or more client(s).
		"""

		url = self.get_fullpath('clientaccountbalances')
		return self.client.get(url, self.site_id, self.authorization, request, GetClientAccountBalancesResponse)

	def get_clientpurchases(self, request):
		"""
		Get a client's purchase history.
		"""

		url = self.get_fullpath('clientpurchases')
		return self.client.get(url, self.site_id, self.authorization, request, GetClientPurchasesResponse)

	def get_clientindexes(self, request):
		"""
		Client indexes are used to analyze client demographics. A business
		owner can set up different categories with sets of values which they
		can assign to each client. Client indexes are used in client searches,
		for tagging clients so that the owner can send mass emails to similar
		groups, and for many reports.    For more information, see Client
		Indexes and [Client Index Values (video tutorial)](https://support.min
		dbodyonline.com/s/article/203261653-Client-indexes-and-client-index-
		values-video-tutorial?language=en_USclient).
		"""

		url = self.get_fullpath('clientindexes')
		return self.client.get(url, self.site_id, self.authorization, request, GetClientIndexesResponse)

	def get_customclientfields(self, request):
		"""
		Get a site's configured custom client fields.
		"""

		url = self.get_fullpath('customclientfields')
		return self.client.get(url, self.site_id, self.authorization, request, GetCustomClientFieldsResponse)

	def post_addcontactlog(self, request):
		"""
		Add a contact log to a client's account.
		"""

		url = self.get_fullpath('addcontactlog')
		return self.client.post(url, self.site_id, self.authorization, request, ContactLog)

	def post_updatecontactlog(self, request):
		"""
		Update a contact log on a client's account.
		"""

		url = self.get_fullpath('updatecontactlog')
		return self.client.post(url, self.site_id, self.authorization, request, ContactLog)

	def get_crossregionalclientassociations(self, request):
		"""
		Returns a list of sites that a particular client ID (also referred to
		as an RSSID) or a client email address is associated with in a cross-
		regional organization. Either the `ClientID` or `Email` parameter is
		required. If both are provided, the `ClientID` is used.    Use this
		endpoint to retrieve information for other Public API endpoints, about
		the same client at multiple sites within an organization. To use this
		endpoint, your developer account must have been granted permission to
		the site’s entire organization.    Note that this endpoint does not
		work on the Developer Sandbox site, as it is not set up for cross-
		regional use cases.
		"""

		url = self.get_fullpath('crossregionalclientassociations')
		return self.client.get(url, self.site_id, self.authorization, request, GetCrossRegionalClientAssociationsResponse)

	def post_addclient(self, request):
		"""
		The `FirstName` and `LastName` parameters are always required in this
		request. All other parameters are optional, but note that any of the
		optional parameters could be required by a particular business,
		depending on how the business has configured the site settings.    Use
		after calling the `GetRequiredClientFields` endpoint to make sure you
		are collecting all required pieces of information.
		"""

		url = self.get_fullpath('addclient')
		return self.client.post(url, self.site_id, self.authorization, request, AddClientResponse)

	def post_updateclient(self, request):
		"""
		Updates an existing client for a specific subscriber. Use this
		endpoint as follows:  * If you need to update the `ReferredBy`
		parameter, use this endpoint after calling `GET ClientReferralTypes`.
		* When updating a client’s home location, use after calling `GET
		Locations`.  * If you are updating a client’s stored credit card,
		use after calling `GET AcceptedCardTypes` so that you can make sure
		the card is a type that is accepted at the subscriber.  If this
		endpoint is used on a cross-regional site, passing in a client’s
		RSSID and email address creates a cross-regional link. This means that
		the client is created in cross-regional sites where the client does
		not exist and `GET CrossRegionalClientAssociations` returns all
		appropriate cross-regional sites. When `CrossRegionalUpdate` is
		omitted or set to `true`, the client’s updated information is
		propagated to all of the region’s sites. If `CrossRegionalUpdate` is
		set to `false`, only the local client is updated.    Note that the
		following items cannot be updated for a cross-regional client:  *
		`ClientIndexes`  * `ClientRelationships`  * `CustomClientFields`  *
		`SalesReps`  * `SendAccountEmails`  * `SendAccountTexts`  *
		`SendPromotionalEmails`  * `SendPromotionalTexts`  *
		`SendScheduleEmails`  * `SendScheduleTexts`
		"""

		url = self.get_fullpath('updateclient')
		return self.client.post(url, self.site_id, self.authorization, request, UpdateClientResponse)

	def post_updateclientvisit(self, request):
		"""
		Update a client's visit.
		"""

		url = self.get_fullpath('updateclientvisit')
		return self.client.post(url, self.site_id, self.authorization, request, UpdateClientVisitResponse)

	def post_addarrival(self, request):
		"""
		Add an arrival for a client.
		"""

		url = self.get_fullpath('addarrival')
		return self.client.post(url, self.site_id, self.authorization, request, AddArrivalResponse)

	def post_sendpasswordresetemail(self, request):
		"""
		Send a password reset email to a client.
		"""

		url = self.get_fullpath('sendpasswordresetemail')
		return self.client.post(url, self.site_id, self.authorization, request, None)

	def get_contactlogs(self, request):
		"""
		This endpoint contains a variety of filters that can return not just
		all contact logs, but also system-generated contact logs, contact logs
		assigned to specific staff members, and contact logs of specific types
		or subtypes.
		"""

		url = self.get_fullpath('contactlogs')
		return self.client.get(url, self.site_id, self.authorization, request, GetContactLogsResponse)

	def post_updateclientservice(self, request):
		"""
		Updates the active date and/or expiration date of a client pricing
		option. This request requires staff user credentials. If the active
		date is modified, the expiration date is also modified accordingly. If
		the expiration date is modified, the active date is unchanged.
		"""

		url = self.get_fullpath('updateclientservice')
		return self.client.post(url, self.site_id, self.authorization, request, UpdateClientServiceResponse)

	def get_clientdirectdebitinfo(self, request):
		"""
		Get direct debit info for a client.
		"""

		url = self.get_fullpath('clientdirectdebitinfo')
		return self.client.get(url, self.site_id, self.authorization, request, DirectDebitInfo)

	def delete_clientdirectdebitinfo(self, request):
		"""
		Delete direct debit info for a client.
		"""

		url = self.get_fullpath('clientdirectdebitinfo')
		return self.client.delete(url, self.site_id, self.authorization, request, None)

	def post_addclientdirectdebitinfo(self, request):
		"""
		no description available
		"""

		url = self.get_fullpath('addclientdirectdebitinfo')
		return self.client.post(url, self.site_id, self.authorization, request, AddClientDirectDebitInfoResponse)

