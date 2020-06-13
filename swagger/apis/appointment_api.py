from .base_api import BaseApi

from ..models.add_appointment_request import AddAppointmentRequest
from ..models.add_appointment_response import AddAppointmentResponse
from ..models.update_appointment_request import UpdateAppointmentRequest
from ..models.update_appointment_response import UpdateAppointmentResponse
from ..models.get_bookableitems_request import GetBookableitemsRequest
from ..models.get_bookable_items_response import GetBookableItemsResponse
from ..models.get_activesessiontimes_request import GetActivesessiontimesRequest
from ..models.get_active_session_times_response import GetActiveSessionTimesResponse
from ..models.get_scheduleitems_request import GetScheduleitemsRequest
from ..models.get_schedule_items_response import GetScheduleItemsResponse
from ..models.get_appointment_options_response import GetAppointmentOptionsResponse
from ..models.get_staffappointments_request import GetStaffappointmentsRequest
from ..models.get_staff_appointments_response import GetStaffAppointmentsResponse

class AppointmentApi(BaseApi):
	def __init__(self, site_id, authorization):
		super().__init__('appointment', site_id, authorization)

	def post_addappointment(self, request):
		"""
		To book an appointment, you must use a location ID, staff ID, client
		ID, session type ID, and the `StartDateTime` of the appointment. You
		can get most of this information using `GET BookableItems`.
		"""

		url = self.get_fullpath('addappointment')
		return self.client.post(url, self.site_id, self.authorization, request, AddAppointmentResponse)

	def post_updateappointment(self, request):
		"""
		To update the information for a specific appointment, you must have a
		staff user token with the proper permissions. Note that you can only
		update the appointment’s `StartDateTime`, `EndDateTime`, `StaffId`,
		`Notes`, and `SessionTypeId`.
		"""

		url = self.get_fullpath('updateappointment')
		return self.client.post(url, self.site_id, self.authorization, request, UpdateAppointmentResponse)

	def get_bookableitems(self, request):
		"""
		Returns a list of availabilities with the information needed to book
		appointments. Availabilities include information such as the location
		and its amenities, staff members, programs, and session types.
		"""

		url = self.get_fullpath('bookableitems')
		return self.client.get(url, self.site_id, self.authorization, request, GetBookableItemsResponse)

	def get_activesessiontimes(self, request):
		"""
		Returns a list of the times that can be booked for a given program
		schedule type. `ActiveSessionTimes` represent the scheduling
		increments that can be booked during the active business hours for
		services.
		"""

		url = self.get_fullpath('activesessiontimes')
		return self.client.get(url, self.site_id, self.authorization, request, GetActiveSessionTimesResponse)

	def get_scheduleitems(self, request):
		"""
		Returns a list of schedule items, including appointments,
		availabilities, and unavailabilities. Unavailabilities are the times
		at which appointments cannot be booked, for example, on holidays or
		after hours when the business is closed.
		"""

		url = self.get_fullpath('scheduleitems')
		return self.client.get(url, self.site_id, self.authorization, request, GetScheduleItemsResponse)

	def get_appointmentoptions(self):
		"""
		This endpoint has no query parameters.
		"""

		url = self.get_fullpath('appointmentoptions')
		return self.client.get(url, self.site_id, self.authorization, None, GetAppointmentOptionsResponse)

	def get_staffappointments(self, request):
		"""
		Returns a list of appointments by staff member.
		"""

		url = self.get_fullpath('staffappointments')
		return self.client.get(url, self.site_id, self.authorization, request, GetStaffAppointmentsResponse)

