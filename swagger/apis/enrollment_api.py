from .base_api import BaseApi

from ..models.add_client_to_enrollment_request import AddClientToEnrollmentRequest
from ..models.class_schedule import ClassSchedule
from ..models.get_enrollments_response import GetEnrollmentsResponse

class EnrollmentApi(BaseApi):
	def __init__(self, site_id, authorization):
		super().__init__('enrollment', site_id, authorization)

	def post_addclienttoenrollment(self, request):
		pass

	def get_enrollments(self, classScheduleIds, endDate, limit, locationIds, offset, programIds, sessionTypeIds, staffIds, startDate):
		pass

