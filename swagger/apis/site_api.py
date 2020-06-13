from .base_api import BaseApi

from ..models.get_sites_request import GetSitesRequest
from ..models.get_sites_response import GetSitesResponse
from ..models.get_sessiontypes_request import GetSessiontypesRequest
from ..models.get_session_types_response import GetSessionTypesResponse
from ..models.get_locations_request import GetLocationsRequest
from ..models.get_locations_response import GetLocationsResponse
from ..models.get_programs_request import GetProgramsRequest
from ..models.get_programs_response import GetProgramsResponse
from ..models.get_resources_request import GetResourcesRequest
from ..models.get_resources_response import GetResourcesResponse
from ..models.get_activation_code_response import GetActivationCodeResponse
from ..models.get_memberships_request import GetMembershipsRequest
from ..models.get_memberships_response import GetMembershipsResponse

class SiteApi(BaseApi):
	def __init__(self, site_id, authorization):
		super().__init__('site', site_id, authorization)

	def get_sites(self, request):
		"""
		Gets a list of sites that the developer has permission to view.  *
		Passing in no `SiteIds` returns all sites that the developer has
		access to.  * Passing in one `SiteIds` returns more detailed
		information about the specified site.
		"""

		url = self.get_fullpath('sites')
		return self.client.get(url, self.site_id, self.authorization, request, GetSitesResponse)

	def get_sessiontypes(self, request):
		"""
		Get the session types used at a site.
		"""

		url = self.get_fullpath('sessiontypes')
		return self.client.get(url, self.site_id, self.authorization, request, GetSessionTypesResponse)

	def get_locations(self, request):
		"""
		Get locations for a site.
		"""

		url = self.get_fullpath('locations')
		return self.client.get(url, self.site_id, self.authorization, request, GetLocationsResponse)

	def get_programs(self, request):
		"""
		Get service categories offered at a site.
		"""

		url = self.get_fullpath('programs')
		return self.client.get(url, self.site_id, self.authorization, request, GetProgramsResponse)

	def get_resources(self, request):
		"""
		Get resources used at a site.
		"""

		url = self.get_fullpath('resources')
		return self.client.get(url, self.site_id, self.authorization, request, GetResourcesResponse)

	def get_activationcode(self):
		"""
		Before you can use this endpoint, MINDBODY must approve your developer
		account for live access. If you have finished testing in the sandbox
		and are ready to begin working with MINDBODY customers, log into your
		account and request to go live.    See [Accessing Business Data From M
		INDBODY](https://developers.mindbodyonline.com/PublicDocumentation/V6#
		accessing-business-data) for more information about the activation
		code and how to use it.    Once you are approved, this endpoint
		returns an activation code.This endpoint supports only one site per
		call.
		"""

		url = self.get_fullpath('activationcode')
		return self.client.get(url, self.site_id, self.authorization, None, GetActivationCodeResponse)

	def get_memberships(self, request):
		"""
		Get the memberships at a site.
		"""

		url = self.get_fullpath('memberships')
		return self.client.get(url, self.site_id, self.authorization, request, GetMembershipsResponse)

