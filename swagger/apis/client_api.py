from .base_api import BaseApi

from ..models.upload_client_document_request import UploadClientDocumentRequest
from ..models.upload_client_photo_request import UploadClientPhotoRequest
from ..models.add_contact_log_request import AddContactLogRequest
from ..models.update_contact_log_request import UpdateContactLogRequest
from ..models.add_client_request import AddClientRequest
from ..models.update_client_request import UpdateClientRequest
from ..models.update_client_visit_request import UpdateClientVisitRequest
from ..models.add_arrival_request import AddArrivalRequest
from ..models.send_password_reset_email_request import SendPasswordResetEmailRequest
from ..models.update_client_service_request import UpdateClientServiceRequest
from ..models.add_client_direct_debit_info_request import AddClientDirectDebitInfoRequest

class ClientApi(BaseApi):
	def __init__(self, site_id, authorization):
		super().__init__('client', site_id, authorization)

	def get_clients(self):
		pass

	def get_clientformulanotes(self):
		pass

	def post_uploadclientdocument(self):
		pass

	def post_uploadclientphoto(self):
		pass

	def get_clientcontracts(self):
		pass

	def get_clientservices(self):
		pass

	def get_clientvisits(self):
		pass

	def get_activeclientmemberships(self):
		pass

	def get_requiredclientfields(self):
		pass

	def get_clientreferraltypes(self):
		pass

	def get_clientaccountbalances(self):
		pass

	def get_clientpurchases(self):
		pass

	def get_clientindexes(self):
		pass

	def get_customclientfields(self):
		pass

	def post_addcontactlog(self):
		pass

	def post_updatecontactlog(self):
		pass

	def get_crossregionalclientassociations(self):
		pass

	def post_addclient(self):
		pass

	def post_updateclient(self):
		pass

	def post_updateclientvisit(self):
		pass

	def post_addarrival(self):
		pass

	def post_sendpasswordresetemail(self):
		pass

	def get_contactlogs(self):
		pass

	def post_updateclientservice(self):
		pass

	def get_clientdirectdebitinfo(self):
		pass

	def delete_clientdirectdebitinfo(self):
		pass

	def post_addclientdirectdebitinfo(self):
		pass

