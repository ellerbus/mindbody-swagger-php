from .base_model import BaseModel

from .visit import Visit
from .client import Client
from .location import Location
from .resource import Resource
from .class_description import ClassDescription
from .staff import Staff
from .booking_window import BookingWindow

class Class(BaseModel):
	"""
	Represents a single class instance. The class meets at the start time,
	goes until the end time.

	Attributes:

		class_schedule_id
		The ID used to retrieve the class schedule for the desired class.

		visits
		Contains information about visits.

		clients
		Contains information about clients.

		location
		Contains information about a location.

		resource
		Contains information about a resource, such as a room, assigned to a
		class.

		max_capacity
		The maximum number of clients allowed in the class.

		web_capacity
		The maximum number of clients allowed to sign up online for the class.

		total_booked
		The total number of clients booked in the class.

		total_booked_waitlist
		The total number of booked clients on the waiting list for the class.

		web_booked
		The total number of clients who signed up online for the class.

		semester_id
		The ID of the semester that the class is a part of, if any.

		is_canceled
		When `true`, indicates that the class has been cancelled.<br />  When
		`false`, indicates that the class has not been cancelled.

		substitute
		When `true`, indicates that the class is being taught by a substitute
		teacher.<br />  When `false`, indicates that the class is being taught
		by its regular teacher.

		active
		When `true`, indicates that the class is shown to clients when in
		consumer mode.<br />  When `false`, indicates that the class is not
		shown to clients when in consumer mode.

		is_waitlist_available
		When `true`, indicates that the clients can be placed on a waiting
		list for the class.<br />  When `false`, indicates that the clients
		cannot be placed on a waiting list for the class.

		is_enrolled
		When `true`, indicates that the client with the given `ClientId` is
		enrolled in this class.<br />  When `false`, indicates that the client
		with the given `ClientId` is not enrolled in this class.

		hide_cancel
		When `true`, indicates that this class is hidden when cancelled.<br />
		When `false`, indicates that this class is not hidden when cancelled.

		id
		The unique identifier for the class.

		is_available
		When `true`, indicates that the client with the given client ID can
		book this class.<br />  When `false`, indicates that the client with
		the given client ID cannot book this class.

		start_date_time
		The time this class is scheduled to start.

		end_date_time
		The time this class is scheduled to end.

		last_modified_date_time
		The last time this class was modified.

		class_description
		Contains information that defines the class.

		staff
		Contains information about the staff member.

		booking_window
		Contains information about the window for booking.

		booking_status
		Contains the booking’s payment status.
	"""

	input_map = {
		'ClassScheduleId': 'class_schedule_id',
		'Visits': ['visits', Visit],
		'Clients': ['clients', Client],
		'Location': ('location', Location),
		'Resource': ('resource', Resource),
		'MaxCapacity': 'max_capacity',
		'WebCapacity': 'web_capacity',
		'TotalBooked': 'total_booked',
		'TotalBookedWaitlist': 'total_booked_waitlist',
		'WebBooked': 'web_booked',
		'SemesterId': 'semester_id',
		'IsCanceled': 'is_canceled',
		'Substitute': 'substitute',
		'Active': 'active',
		'IsWaitlistAvailable': 'is_waitlist_available',
		'IsEnrolled': 'is_enrolled',
		'HideCancel': 'hide_cancel',
		'Id': 'id',
		'IsAvailable': 'is_available',
		'StartDateTime': 'start_date_time',
		'EndDateTime': 'end_date_time',
		'LastModifiedDateTime': 'last_modified_date_time',
		'ClassDescription': ('class_description', ClassDescription),
		'Staff': ('staff', Staff),
		'BookingWindow': ('booking_window', BookingWindow),
		'BookingStatus': 'booking_status',
		}

	output_map = {
		'class_schedule_id': 'ClassScheduleId',
		'visits': 'Visits',
		'clients': 'Clients',
		'location': 'Location',
		'resource': 'Resource',
		'max_capacity': 'MaxCapacity',
		'web_capacity': 'WebCapacity',
		'total_booked': 'TotalBooked',
		'total_booked_waitlist': 'TotalBookedWaitlist',
		'web_booked': 'WebBooked',
		'semester_id': 'SemesterId',
		'is_canceled': 'IsCanceled',
		'substitute': 'Substitute',
		'active': 'Active',
		'is_waitlist_available': 'IsWaitlistAvailable',
		'is_enrolled': 'IsEnrolled',
		'hide_cancel': 'HideCancel',
		'id': 'Id',
		'is_available': 'IsAvailable',
		'start_date_time': 'StartDateTime',
		'end_date_time': 'EndDateTime',
		'last_modified_date_time': 'LastModifiedDateTime',
		'class_description': 'ClassDescription',
		'staff': 'Staff',
		'booking_window': 'BookingWindow',
		'booking_status': 'BookingStatus',
		}

	class_schedule_id = None
	visits = None
	clients = None
	location = None
	resource = None
	max_capacity = None
	web_capacity = None
	total_booked = None
	total_booked_waitlist = None
	web_booked = None
	semester_id = None
	is_canceled = None
	substitute = None
	active = None
	is_waitlist_available = None
	is_enrolled = None
	hide_cancel = None
	id = None
	is_available = None
	start_date_time = None
	end_date_time = None
	last_modified_date_time = None
	class_description = None
	staff = None
	booking_window = None
	booking_status = None

