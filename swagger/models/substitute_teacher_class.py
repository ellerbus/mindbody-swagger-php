from .base_model import BaseModel

from .location import Location
from .class_description import ClassDescription
from .staff import Staff

class SubstituteTeacherClass(BaseModel):
	"""
	Represents a single class instance. Used in SubstituteClassTeacher
	endpoint.

	Attributes:

		class_schedule_id
		The class schedule ID of the requested class.

		location
		Contains information about the location where the class is taking
		place.

		max_capacity
		The total number of bookings allowed in the class.

		web_capacity
		The total number of online bookings allowed in the class.

		total_booked
		The total number of clients who are booked into the class prior to
		this call being made.

		total_booked_waitlist
		The total number of booked clients who are on the waiting list for the
		class prior to this call being made.

		web_booked
		The total number of bookings in the class made by online users, prior
		to this call being made. This property is the current number of
		bookings counted toward the `WebCapacity` limit.

		semester_id
		Identifies the semester assigned to this class.

		is_canceled
		When `true`, indicates that the class has been canceled.<br />  When
		`false`, indicates that the class has not been canceled and may still
		be bookable.

		substitute
		When `true`, indicates that the class is being taught by a substitute
		teacher.

		active
		When `true`, indicates that the class is being shown to clients in
		consumer mode.

		is_waitlist_available
		When `true`, indicates that the class has a waiting list and there is
		space available on the waiting list for another client.<br />  When
		`false`, indicates either that the class does not have a waiting list
		or there is no space available on the class waiting list.

		hide_cancel
		When `true`, indicates that this class is should not be shown to
		clients when `IsCancelled` is `true`.<br />  When `false`, indicates
		that this class is should be shown to clients when `IsCancelled` is
		`true`.<br />  This property can be ignored when the `IsCancelled`
		property is `false`.

		id
		The unique identifier of the class.

		is_available
		When `true`, indicates that the class can be booked.<br />  When
		`false`, that the class cannot be booked at this time.

		start_date_time
		The date and time that this class is scheduled to start.

		end_date_time
		The date and time when this class is scheduled to end.

		last_modified_date_time
		The last time the class was modified.

		class_description
		Contains information about this class.

		staff
		Contains information about the teacher of the class.
	"""

	input_map = {
		'ClassScheduleId': 'class_schedule_id',
		'Location': ('location', Location),
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
		'HideCancel': 'hide_cancel',
		'Id': 'id',
		'IsAvailable': 'is_available',
		'StartDateTime': 'start_date_time',
		'EndDateTime': 'end_date_time',
		'LastModifiedDateTime': 'last_modified_date_time',
		'ClassDescription': ('class_description', ClassDescription),
		'Staff': ('staff', Staff),
		}

	output_map = {
		'class_schedule_id': 'ClassScheduleId',
		'location': 'Location',
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
		'hide_cancel': 'HideCancel',
		'id': 'Id',
		'is_available': 'IsAvailable',
		'start_date_time': 'StartDateTime',
		'end_date_time': 'EndDateTime',
		'last_modified_date_time': 'LastModifiedDateTime',
		'class_description': 'ClassDescription',
		'staff': 'Staff',
		}

	class_schedule_id = None
	location = None
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
	hide_cancel = None
	id = None
	is_available = None
	start_date_time = None
	end_date_time = None
	last_modified_date_time = None
	class_description = None
	staff = None

