from .base_api import BaseApi

from ..models.get_classes_request import GetClassesRequest
from ..models.get_classes_response import GetClassesResponse
from ..models.get_classdescriptions_request import GetClassdescriptionsRequest
from ..models.get_class_descriptions_response import GetClassDescriptionsResponse
from ..models.get_classvisits_request import GetClassvisitsRequest
from ..models.get_class_visits_response import GetClassVisitsResponse
from ..models.remove_client_from_class_request import RemoveClientFromClassRequest
from ..models.remove_client_from_class_response import RemoveClientFromClassResponse
from ..models.add_client_to_class_request import AddClientToClassRequest
from ..models.add_client_to_class_response import AddClientToClassResponse
from ..models.get_classschedules_request import GetClassschedulesRequest
from ..models.get_class_schedules_response import GetClassSchedulesResponse
from ..models.get_waitlistentries_request import GetWaitlistentriesRequest
from ..models.get_waitlist_entries_response import GetWaitlistEntriesResponse
from ..models.post_removefromwaitlist_request import PostRemovefromwaitlistRequest
from ..models.remove_from_waitlist_response import RemoveFromWaitlistResponse
from ..models.substitute_class_teacher_request import SubstituteClassTeacherRequest
from ..models.substitute_class_teacher_response import SubstituteClassTeacherResponse

class ClassApi(BaseApi):
	def __init__(self, site_id, authorization):
		super().__init__('class', site_id, authorization)

	def get_classes(self, request):
		"""
		Get scheduled classes.
		"""

		url = self.get_fullpath('classes')
		return self.client.get(url, self.site_id, self.authorization, request, GetClassesResponse)

	def get_classdescriptions(self, request):
		"""
		To find class descriptions associated with **scheduled classes**, pass
		`StaffId`, `StartClassDateTime`, `EndClassDateTime`, or `LocationId`
		in the request.
		"""

		url = self.get_fullpath('classdescriptions')
		return self.client.get(url, self.site_id, self.authorization, request, GetClassDescriptionsResponse)

	def get_classvisits(self, request):
		"""
		Returns a list of visits that contain information for a specified
		class. On success, this request returns the class object in the
		response with a list of visits.
		"""

		url = self.get_fullpath('classvisits')
		return self.client.get(url, self.site_id, self.authorization, request, GetClassVisitsResponse)

	def post_removeclientfromclass(self, request):
		"""
		Remove a client from a class.
		"""

		url = self.get_fullpath('removeclientfromclass')
		return self.client.post(url, self.site_id, self.authorization, request, RemoveClientFromClassResponse)

	def post_addclienttoclass(self, request):
		"""
		This endpoint adds a client to a class or to a class waiting list. It
		is helpful to use this endpoint in the following situations:  * Use
		after calling `GET Clients` and `GET Classes` so that you are sure
		which client to book in which class.  * If adding a client to a class
		from a waiting list, use this call after you call `GET
		WaitlistEntries` and determine the ID of the waiting list from which
		you are moving the client.  * If adding a client to a class and using
		a pricing option that the client has already purchased, use this call
		after you call `GET ClientServices` to determine the ID of the pricing
		option that the client wants to use.    If you add a client to a class
		and the client purchases a new pricing option, use `GET Services`,
		`GET Classes`, and then `POST CheckoutShoppingCart` in place of this
		call.    This endpoint also supports cross-regional class bookings. If
		you want to perform a cross-regional class booking, set
		`CrossRegionalBooking` to `true`. This endpoint does not support
		adding a user to a waiting list using a cross-regional client pricing
		option(service). Cross-regional booking workflows do not support
		client service scheduling restrictions.    When performing a cross-
		regional class booking, this endpoint loops through the first ten
		sites that the client is associated with, looks for client pricing
		options at each of those sites, and then uses the oldest client
		pricing option found.It is important to note that this endpoint only
		loops through a maximum of ten associated client sites. If a
		`ClientID` is associated with more than ten sites in an organization,
		this endpoint only loops through the first ten.If you know that a
		client has a client service at another site, you can specify that site
		using the `CrossRegionalBookingClientServiceSiteId` query parameter.
		If you perform a cross-regional booking, two additional fields are
		included in the `SessionType` object of the response:  * `SiteID`,
		which specifies where the client service is coming from  *
		`CrossRegionalBookingPerformed`, a Boolean field that is set to `true`
		As a prerequisite to using this endpoint, your `SourceName` must have
		been granted access to the organization to which the site belongs.
		"""

		url = self.get_fullpath('addclienttoclass')
		return self.client.post(url, self.site_id, self.authorization, request, AddClientToClassResponse)

	def get_classschedules(self, request):
		"""
		Get class schedules.
		"""

		url = self.get_fullpath('classschedules')
		return self.client.get(url, self.site_id, self.authorization, request, GetClassSchedulesResponse)

	def get_waitlistentries(self, request):
		"""
		Returns a list of waiting list entries for a specified class schedule
		or class. The request requires staff credentials and either a class
		schedule ID or class ID.
		"""

		url = self.get_fullpath('waitlistentries')
		return self.client.get(url, self.site_id, self.authorization, request, GetWaitlistEntriesResponse)

	def post_removefromwaitlist(self, request):
		"""
		This endpoint does not return a response. If a call to this endpoint
		results in a 200 OK HTTP status code, then the call was successful.
		"""

		url = self.get_fullpath('removefromwaitlist')
		return self.client.post(url, self.site_id, self.authorization, request, RemoveFromWaitlistResponse)

	def post_substituteclassteacher(self, request):
		"""
		Substitute a class teacher.
		"""

		url = self.get_fullpath('substituteclassteacher')
		return self.client.post(url, self.site_id, self.authorization, request, SubstituteClassTeacherResponse)

