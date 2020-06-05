from .base_api import BaseApi

from ..models.remove_client_from_class_request import RemoveClientFromClassRequest
from ..models.add_client_to_class_request import AddClientToClassRequest
from ..models.substitute_class_teacher_request import SubstituteClassTeacherRequest

class ClassApi(BaseApi):
	def __init__(self, site_id, authorization):
		super().__init__('class', site_id, authorization)

	def get_classes(self):
		pass

	def get_classdescriptions(self):
		pass

	def get_classvisits(self):
		pass

	def post_removeclientfromclass(self):
		pass

	def post_addclienttoclass(self):
		pass

	def get_classschedules(self):
		pass

	def get_waitlistentries(self):
		pass

	def post_removefromwaitlist(self):
		pass

	def post_substituteclassteacher(self):
		pass

