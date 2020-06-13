from .base_api import BaseApi

from ..models.add_appointment_request import AddAppointmentRequest
from ..models.add_appointment_response import AddAppointmentResponse
from ..models.update_appointment_request import UpdateAppointmentRequest
from ..models.update_appointment_response import UpdateAppointmentResponse
from ..models.get_bookable_items_response import GetBookableItemsResponse
from ..models.get_active_session_times_response import GetActiveSessionTimesResponse
from ..models.get_schedule_items_response import GetScheduleItemsResponse
from ..models.get_appointment_options_response import GetAppointmentOptionsResponse
from ..models.get_staff_appointments_response import GetStaffAppointmentsResponse

class AppointmentApi(BaseApi):
	def __init__(self, site_id, authorization):
		super().__init__('appointment', site_id, authorization)

	def post_addappointment(self, request):
		pass

	def post_updateappointment(self, request):
		pass

	def get_bookableitems(self, sessionTypeIds, appointmentId, endDate, ignoreDefaultSessionLength, limit, locationIds, offset, staffIds, startDate):
		pass

	def get_activesessiontimes(self, endTime, limit, offset, scheduleType, sessionTypeIds, startTime):
		pass

	def get_scheduleitems(self, endDate, ignorePrepFinishTimes, limit, locationIds, offset, staffIds, startDate):
		pass

	def get_appointmentoptions(self):
		pass

	def get_staffappointments(self, appointmentIds, clientId, endDate, limit, locationIds, offset, staffIds, startDate):
		pass

