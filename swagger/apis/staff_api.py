from .base_api import BaseApi

from ..models.get_staff_response import GetStaffResponse
from ..models.get_staff_permissions_response import GetStaffPermissionsResponse

class StaffApi(BaseApi):
	def __init__(self, site_id, authorization):
		super().__init__('staff', site_id, authorization)

	def get_staff(self, filters, limit, locationId, offset, sessionTypeId, staffIds, startDateTime):
		pass

	def get_staffpermissions(self, staffId):
		pass

