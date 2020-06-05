from .base_api import BaseApi

from ..models.issue_request import IssueRequest

class UsertokenApi(BaseApi):
	def __init__(self, site_id, authorization):
		super().__init__('usertoken', site_id, authorization)

	def post_issue(self):
		pass

	def delete_revoke(self):
		pass

