from .base_api import BaseApi

from ..models.add_client_to_enrollment_request import AddClientToEnrollmentRequest

class EnrollmentApi(BaseApi):
	def __init__(self, site_id, authorization):
		super().__init__('enrollment', site_id, authorization)

	def post_addclienttoenrollment(self):
		pass

	def get_enrollments(self):
		pass

