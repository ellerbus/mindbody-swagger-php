from .base_model import BaseModel

from .staff import Staff
from .session_type import SessionType
from .location import Location

class Availability(BaseModel):
	"""
	A staff availability entry

	Attributes:

		id
		The ID of the availability.

		staff
		Contains information about staff members.

		session_type
		Contains information about the types of sessions.

		programs
		Contains information about the programs.

		start_date_time
		The date and time the availability starts.

		end_date_time
		The date and time the availability ends.

		bookable_end_date_time
		The time of day that the last appointment can start.

		location
		Contains information about the location.
	"""

	input_map = {
		'Id': 'id',
		'Staff': ('staff', Staff),
		'SessionType': ('session_type', SessionType),
		'Programs': 'programs',
		'StartDateTime': 'start_date_time',
		'EndDateTime': 'end_date_time',
		'BookableEndDateTime': 'bookable_end_date_time',
		'Location': ('location', Location),
		}

	output_map = {
		'id': 'Id',
		'staff': 'Staff',
		'session_type': 'SessionType',
		'programs': 'Programs',
		'start_date_time': 'StartDateTime',
		'end_date_time': 'EndDateTime',
		'bookable_end_date_time': 'BookableEndDateTime',
		'location': 'Location',
		}

	id = None
	staff = None
	session_type = None
	programs = None
	start_date_time = None
	end_date_time = None
	bookable_end_date_time = None
	location = None

