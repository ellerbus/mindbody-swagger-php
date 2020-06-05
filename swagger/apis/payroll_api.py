from .base_api import BaseApi


class PayrollApi(BaseApi):
	def __init__(self, site_id, authorization):
		super().__init__('payroll', site_id, authorization)

	def get_scheduledserviceearnings(self):
		pass

	def get_timecards(self):
		pass

	def get_commissions(self):
		pass

	def get_tips(self):
		pass

