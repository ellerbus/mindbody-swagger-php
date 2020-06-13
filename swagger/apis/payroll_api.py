from .base_api import BaseApi

from ..models.get_scheduledserviceearnings_request import GetScheduledserviceearningsRequest
from ..models.get_scheduled_service_earnings_response import GetScheduledServiceEarningsResponse
from ..models.get_timecards_request import GetTimecardsRequest
from ..models.get_time_cards_response import GetTimeCardsResponse
from ..models.get_commissions_request import GetCommissionsRequest
from ..models.get_commissions_response import GetCommissionsResponse
from ..models.get_tips_request import GetTipsRequest
from ..models.get_tips_response import GetTipsResponse

class PayrollApi(BaseApi):
	def __init__(self, site_id, authorization):
		super().__init__('payroll', site_id, authorization)

	def get_scheduledserviceearnings(self, request):
		"""
		A staff authorization token is not required for this endpoint, but if
		one is passed, its permissions are honored. Depending on the access
		permissions configured for the staff member whose token is passed, the
		endpoint returns either only the payroll information for that staff
		member or it returns the payroll information for all staff members.
		Note that if a staff member is not paid for a class, earnings of zero
		are returned by this endpoint.    Note that this endpoint calculates
		both bonus and no-reg rates for assistants.These rates are not
		supported by the Payroll report in the web interface.    Note that
		this endpoint returns both the teacher’s adjusted rate and the
		assistant’s pay rate when the assistant is paid by the teacher.The
		Payroll report in the web interface only returns the teacher’s
		adjusted rate.
		"""

		url = self.get_fullpath('scheduledserviceearnings')
		return self.client.get(url, self.site_id, self.authorization, request, GetScheduledServiceEarningsResponse)

	def get_timecards(self, request):
		"""
		Get time card payroll for staff members.
		"""

		url = self.get_fullpath('timecards')
		return self.client.get(url, self.site_id, self.authorization, request, GetTimeCardsResponse)

	def get_commissions(self, request):
		"""
		A staff authorization token is not required for this endpoint, but if
		one is passed, its permissions are honored. Depending on the access
		permissions configured for the staff member whose token is passed, the
		endpoint returns either only the payroll information for that staff
		member or it returns the payroll information for all staff members.
		"""

		url = self.get_fullpath('commissions')
		return self.client.get(url, self.site_id, self.authorization, request, GetCommissionsResponse)

	def get_tips(self, request):
		"""
		Get tips for staff members.
		"""

		url = self.get_fullpath('tips')
		return self.client.get(url, self.site_id, self.authorization, request, GetTipsResponse)

