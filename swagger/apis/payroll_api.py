from .base_api import BaseApi

from ..models.get_scheduled_service_earnings_response import GetScheduledServiceEarningsResponse
from ..models.get_time_cards_response import GetTimeCardsResponse
from ..models.get_commissions_response import GetCommissionsResponse
from ..models.get_tips_response import GetTipsResponse

class PayrollApi(BaseApi):
	def __init__(self, site_id, authorization):
		super().__init__('payroll', site_id, authorization)

	def get_scheduledserviceearnings(self, endDateTime, limit, offset, scheduledServiceId, scheduledServiceType, staffId, startDateTime):
		pass

	def get_timecards(self, endDateTime, limit, offset, staffId, startDateTime):
		pass

	def get_commissions(self, endDateTime, limit, offset, staffId, startDateTime):
		pass

	def get_tips(self, endDateTime, limit, offset, staffId, startDateTime):
		pass

