from .base_api import BaseApi

from ..models.issue_request import IssueRequest
from ..models.issue_response import IssueResponse

class UsertokenApi(BaseApi):
	def __init__(self, site_id, authorization):
		super().__init__('usertoken', site_id, authorization)

	def post_issue(self, request):
		"""
		Get a staff user token.
		"""

		url = self.get_fullpath('issue')
		return self.client.post(url, self.site_id, None, request, IssueResponse)

	def delete_revoke(self):
		"""
		Revokes the user token in the Authorization header.
		"""

		url = self.get_fullpath('revoke')
		return self.client.delete(url, self.site_id, self.authorization, None, None)

