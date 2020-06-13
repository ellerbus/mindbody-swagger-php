from .base_api import BaseApi

from ..models.add_client_to_enrollment_request import AddClientToEnrollmentRequest
from ..models.class_schedule import ClassSchedule
from ..models.get_enrollments_request import GetEnrollmentsRequest
from ..models.get_enrollments_response import GetEnrollmentsResponse

class EnrollmentApi(BaseApi):
	def __init__(self, site_id, authorization):
		super().__init__('enrollment', site_id, authorization)

	def post_addclienttoenrollment(self, request):
		"""
		Book a client into an enrollment.
		"""

		url = self.get_fullpath('addclienttoenrollment')
		return self.client.post(url, self.site_id, self.authorization, request, ClassSchedule)

	def get_enrollments(self, request):
		"""
		Returns a list of enrollments. An enrollment is a service, such as a
		workshop or an event, that a staff member offers to multiple students,
		who commit to coming to all or most of the scheduled sessions.
		Enrollments typically run for a limited time only.
		"""

		url = self.get_fullpath('enrollments')
		return self.client.get(url, self.site_id, self.authorization, request, GetEnrollmentsResponse)

