from .base_api import BaseApi

from ..models.get_staff_request import GetStaffRequest
from ..models.get_staff_response import GetStaffResponse
from ..models.get_staffpermissions_request import GetStaffpermissionsRequest
from ..models.get_staff_permissions_response import GetStaffPermissionsResponse

class StaffApi(BaseApi):
	def __init__(self, site_id, authorization):
		super().__init__('staff', site_id, authorization)

	def get_staff(self, request):
		"""
		Get staff members at a site.
		"""

		url = self.get_fullpath('staff')
		return self.client.get(url, self.site_id, self.authorization, request, GetStaffResponse)

	def get_staffpermissions(self, request):
		"""
		Get configured staff permissions for a staff member.
		"""

		url = self.get_fullpath('staffpermissions')
		return self.client.get(url, self.site_id, self.authorization, request, GetStaffPermissionsResponse)

