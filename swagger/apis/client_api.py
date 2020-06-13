from .base_api import BaseApi

from ..models.get_clients_response import GetClientsResponse
from ..models.get_client_formula_notes_response import GetClientFormulaNotesResponse
from ..models.upload_client_document_request import UploadClientDocumentRequest
from ..models.upload_client_document_response import UploadClientDocumentResponse
from ..models.upload_client_photo_request import UploadClientPhotoRequest
from ..models.upload_client_photo_response import UploadClientPhotoResponse
from ..models.get_client_contracts_response import GetClientContractsResponse
from ..models.get_client_services_response import GetClientServicesResponse
from ..models.get_client_visits_response import GetClientVisitsResponse
from ..models.get_active_client_memberships_response import GetActiveClientMembershipsResponse
from ..models.get_required_client_fields_response import GetRequiredClientFieldsResponse
from ..models.get_client_referral_types_response import GetClientReferralTypesResponse
from ..models.get_client_account_balances_response import GetClientAccountBalancesResponse
from ..models.get_client_purchases_response import GetClientPurchasesResponse
from ..models.get_client_indexes_response import GetClientIndexesResponse
from ..models.get_custom_client_fields_response import GetCustomClientFieldsResponse
from ..models.add_contact_log_request import AddContactLogRequest
from ..models.contact_log import ContactLog
from ..models.update_contact_log_request import UpdateContactLogRequest
from ..models.contact_log import ContactLog
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
from ..models.get_contact_logs_response import GetContactLogsResponse
from ..models.update_client_service_request import UpdateClientServiceRequest
from ..models.update_client_service_response import UpdateClientServiceResponse
from ..models.direct_debit_info import DirectDebitInfo
from ..models.add_client_direct_debit_info_request import AddClientDirectDebitInfoRequest
from ..models.add_client_direct_debit_info_response import AddClientDirectDebitInfoResponse

class ClientApi(BaseApi):
	def __init__(self, site_id, authorization):
		super().__init__('client', site_id, authorization)

	def get_clients(self, clientIDs, isProspect, lastModifiedDate, limit, offset, searchText):
		pass

	def get_clientformulanotes(self, appointmentId, clientId, limit, offset):
		pass

	def post_uploadclientdocument(self, request):
		pass

	def post_uploadclientphoto(self, request):
		pass

	def get_clientcontracts(self, clientId, clientAssociatedSitesOffset, crossRegionalLookup, limit, offset):
		pass

	def get_clientservices(self, clientId, classId, clientAssociatedSitesOffset, crossRegionalLookup, endDate, limit, locationIds, offset, programIds, sessionTypeId, showActiveOnly, startDate, visitCount):
		pass

	def get_clientvisits(self, clientId, clientAssociatedSitesOffset, crossRegionalLookup, endDate, limit, offset, startDate, unpaidsOnly):
		pass

	def get_activeclientmemberships(self, clientId, clientAssociatedSitesOffset, crossRegionalLookup, limit, locationId, offset):
		pass

	def get_requiredclientfields(self):
		pass

	def get_clientreferraltypes(self, includeInactive):
		pass

	def get_clientaccountbalances(self, clientIds, balanceDate, classId, limit, offset):
		pass

	def get_clientpurchases(self, clientId, endDate, limit, offset, saleId, startDate):
		pass

	def get_clientindexes(self, requiredOnly):
		pass

	def get_customclientfields(self, limit, offset):
		pass

	def post_addcontactlog(self, request):
		pass

	def post_updatecontactlog(self, request):
		pass

	def get_crossregionalclientassociations(self, clientId, email, limit, offset):
		pass

	def post_addclient(self, request):
		pass

	def post_updateclient(self, request):
		pass

	def post_updateclientvisit(self, request):
		pass

	def post_addarrival(self, request):
		pass

	def post_sendpasswordresetemail(self, request):
		pass

	def get_contactlogs(self, clientId, endDate, limit, offset, showSystemGenerated, staffIds, startDate, subtypeIds, typeIds):
		pass

	def post_updateclientservice(self, request):
		pass

	def get_clientdirectdebitinfo(self, clientId):
		pass

	def delete_clientdirectdebitinfo(self, clientId):
		pass

	def post_addclientdirectdebitinfo(self, request):
		pass

