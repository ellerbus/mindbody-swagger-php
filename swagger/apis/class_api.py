from .base_api import BaseApi

from ..models.get_classes_response import GetClassesResponse
from ..models.get_class_descriptions_response import GetClassDescriptionsResponse
from ..models.get_class_visits_response import GetClassVisitsResponse
from ..models.remove_client_from_class_request import RemoveClientFromClassRequest
from ..models.remove_client_from_class_response import RemoveClientFromClassResponse
from ..models.add_client_to_class_request import AddClientToClassRequest
from ..models.add_client_to_class_response import AddClientToClassResponse
from ..models.get_class_schedules_response import GetClassSchedulesResponse
from ..models.get_waitlist_entries_response import GetWaitlistEntriesResponse
from ..models.remove_from_waitlist_response import RemoveFromWaitlistResponse
from ..models.substitute_class_teacher_request import SubstituteClassTeacherRequest
from ..models.substitute_class_teacher_response import SubstituteClassTeacherResponse

class ClassApi(BaseApi):
	def __init__(self, site_id, authorization):
		super().__init__('class', site_id, authorization)

	def get_classes(self, classDescriptionIds, classIds, clientId, endDateTime, hideCanceledClasses, lastModifiedDate, limit, locationIds, offset, programIds, schedulingWindow, semesterIds, sessionTypeIds, staffIds, startDateTime):
		pass

	def get_classdescriptions(self, classDescriptionId, endClassDateTime, limit, locationId, offset, programIds, staffId, startClassDateTime):
		pass

	def get_classvisits(self, classID, lastModifiedDate):
		pass

	def post_removeclientfromclass(self, request):
		pass

	def post_addclienttoclass(self, request):
		pass

	def get_classschedules(self, classScheduleIds, endDate, limit, locationIds, offset, programIds, sessionTypeIds, staffIds, startDate):
		pass

	def get_waitlistentries(self, classIds, classScheduleIds, clientIds, hidePastEntries, limit, offset, waitlistEntryIds):
		pass

	def post_removefromwaitlist(self, waitlistEntryIds):
		pass

	def post_substituteclassteacher(self, request):
		pass

