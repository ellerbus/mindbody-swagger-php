from .base_api import BaseApi

from ..models.get_sites_response import GetSitesResponse
from ..models.get_session_types_response import GetSessionTypesResponse
from ..models.get_locations_response import GetLocationsResponse
from ..models.get_programs_response import GetProgramsResponse
from ..models.get_resources_response import GetResourcesResponse
from ..models.get_activation_code_response import GetActivationCodeResponse
from ..models.get_memberships_response import GetMembershipsResponse

class SiteApi(BaseApi):
	def __init__(self, site_id, authorization):
		super().__init__('site', site_id, authorization)

	def get_sites(self, limit, offset, siteIds):
		pass

	def get_sessiontypes(self, limit, offset, onlineOnly, programIDs):
		pass

	def get_locations(self, limit, offset):
		pass

	def get_programs(self, limit, offset, onlineOnly, scheduleType):
		pass

	def get_resources(self, endDateTime, limit, locationId, offset, sessionTypeIds, startDateTime):
		pass

	def get_activationcode(self):
		pass

	def get_memberships(self, membershipIds):
		pass

