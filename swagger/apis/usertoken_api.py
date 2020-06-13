from .base_api import BaseApi

from ..models.issue_request import IssueRequest
from ..models.issue_response import IssueResponse

class UsertokenApi(BaseApi):
	def __init__(self, site_id, authorization):
		super().__init__('usertoken', site_id, authorization)

	def post_issue(self, request):
		pass

	def delete_revoke(self):
		pass

