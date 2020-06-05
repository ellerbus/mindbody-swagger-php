from .base_api import BaseApi

from ..models.add_appointment_request import AddAppointmentRequest
from ..models.update_appointment_request import UpdateAppointmentRequest

class AppointmentApi(BaseApi):
	def __init__(self, site_id, authorization):
		super().__init__('appointment', site_id, authorization)

	def post_addappointment(self):
		pass

	def post_updateappointment(self):
		pass

	def get_bookableitems(self):
		pass

	def get_activesessiontimes(self):
		pass

	def get_scheduleitems(self):
		pass

	def get_appointmentoptions(self):
		pass

	def get_staffappointments(self):
		pass

