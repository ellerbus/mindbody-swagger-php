from .base_api import BaseApi


class SiteApi(BaseApi):
	def __init__(self, site_id, authorization):
		super().__init__('site', site_id, authorization)

	def get_sites(self):
		pass

	def get_sessiontypes(self):
		pass

	def get_locations(self):
		pass

	def get_programs(self):
		pass

	def get_resources(self):
		pass

	def get_activationcode(self):
		pass

	def get_memberships(self):
		pass

