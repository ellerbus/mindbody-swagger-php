from .base_model import BaseModel

from .course import Course
from .class_description import ClassDescription
from .staff import Staff
from .location import Location

class ClassSchedule(BaseModel):
	"""
	Represents a single class instance. The class meets at the start time,
	goes until the end time.

	Attributes:

		classes
		Contains information about classes.

		clients
		Contains information about clients.

		course
		Contains information about the course that the enrollment is a part
		of.

		semester_id
		The semester ID for the enrollment (if any).

		is_available
		When `true`, indicates that the enrollment shows in consumer mode, has
		not started yet, and there is room in each class of the enrollment.<br
		/>  When `false`, indicates that either the enrollment does not show
		in consumer mode, has already started, or there is no room in some
		classes of the enrollment.

		id
		The unique ID of the class schedule.

		class_description
		Contains information about the class.

		day_sunday
		When `true`, indicates that this schedule occurs on Sundays.

		day_monday
		When `true`, indicates that this schedule occurs on Mondays.

		day_tuesday
		When `true`, indicates that this schedule occurs on Tuesdays.

		day_wednesday
		When `true`, indicates that this schedule occurs on Wednesdays.

		day_thursday
		When `true`, indicates that this schedule occurs on Thursdays.

		day_friday
		When `true`, indicates that this schedule occurs on Fridays.

		day_saturday
		When `true`, indicates that this schedule occurs on Saturdays.

		allow_open_enrollment
		When `true`, indicates that the enrollment allows booking after the
		enrollment has started.

		allow_date_forward_enrollment
		When `true`, indicates that this the enrollment shows in consumer
		mode, the enrollment has not started yet, and there is room in each
		class of the enrollment.

		start_time
		The time this class schedule starts.

		end_time
		The time this class schedule ends.

		start_date
		The date this class schedule starts.

		end_date
		The date this class schedule ends.

		staff
		Contains information about the staff member who is regularly scheduled
		to teach the class.

		location
		Contains information about the regularly scheduled location of this
		class.
	"""

	input_map = {
		'Classes': 'classes',
		'Clients': 'clients',
		'Course': ('course', Course),
		'SemesterId': 'semester_id',
		'IsAvailable': 'is_available',
		'Id': 'id',
		'ClassDescription': ('class_description', ClassDescription),
		'DaySunday': 'day_sunday',
		'DayMonday': 'day_monday',
		'DayTuesday': 'day_tuesday',
		'DayWednesday': 'day_wednesday',
		'DayThursday': 'day_thursday',
		'DayFriday': 'day_friday',
		'DaySaturday': 'day_saturday',
		'AllowOpenEnrollment': 'allow_open_enrollment',
		'AllowDateForwardEnrollment': 'allow_date_forward_enrollment',
		'StartTime': 'start_time',
		'EndTime': 'end_time',
		'StartDate': 'start_date',
		'EndDate': 'end_date',
		'Staff': ('staff', Staff),
		'Location': ('location', Location),
		}

	output_map = {
		'classes': 'Classes',
		'clients': 'Clients',
		'course': 'Course',
		'semester_id': 'SemesterId',
		'is_available': 'IsAvailable',
		'id': 'Id',
		'class_description': 'ClassDescription',
		'day_sunday': 'DaySunday',
		'day_monday': 'DayMonday',
		'day_tuesday': 'DayTuesday',
		'day_wednesday': 'DayWednesday',
		'day_thursday': 'DayThursday',
		'day_friday': 'DayFriday',
		'day_saturday': 'DaySaturday',
		'allow_open_enrollment': 'AllowOpenEnrollment',
		'allow_date_forward_enrollment': 'AllowDateForwardEnrollment',
		'start_time': 'StartTime',
		'end_time': 'EndTime',
		'start_date': 'StartDate',
		'end_date': 'EndDate',
		'staff': 'Staff',
		'location': 'Location',
		}