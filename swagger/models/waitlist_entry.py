from .base_model import BaseModel

from .class_schedule import ClassSchedule
from .client import Client

class WaitlistEntry(BaseModel):
	"""
	no description available

	Attributes:

		class_date
		The date of the class or enrollment.

		class_id
		The ID of the class or enrollment.

		class_schedule
		Contains information about the class schedule for this waiting list
		entry.

		client
		Contains information about the requested client who is on the waiting
		list.

		enrollment_date_forward
		If the waiting list entry was created for an enrollment, this is the
		date on or after which the client can be added to the enrollment from
		the waitlist.

		id
		The ID of the waiting list entry.

		request_date_time
		The date and time that the request to be on the waiting list was made.

		visit_ref_no
		The ID of the visit that is associated with the waiting list entry.

		web
		If `true`, the entry on the waiting list was requested online.<br />
		If `false`, the entry on the waiting list was requested off-line, for
		example in person or by phone.
	"""

	input_map = {
		'ClassDate': 'class_date',
		'ClassId': 'class_id',
		'ClassSchedule': ('class_schedule', ClassSchedule),
		'Client': ('client', Client),
		'EnrollmentDateForward': 'enrollment_date_forward',
		'Id': 'id',
		'RequestDateTime': 'request_date_time',
		'VisitRefNo': 'visit_ref_no',
		'Web': 'web',
		}

	output_map = {
		'class_date': 'ClassDate',
		'class_id': 'ClassId',
		'class_schedule': 'ClassSchedule',
		'client': 'Client',
		'enrollment_date_forward': 'EnrollmentDateForward',
		'id': 'Id',
		'request_date_time': 'RequestDateTime',
		'visit_ref_no': 'VisitRefNo',
		'web': 'Web',
		}