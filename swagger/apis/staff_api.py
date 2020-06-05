from .base_api import BaseApi


class StaffApi(BaseApi):
	def __init__(self, site_id, authorization):
		super().__init__('staff', site_id, authorization)

	def get_staff(self):
		pass

	def get_staffpermissions(self):
		pass

