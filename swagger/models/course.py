from .base_model import BaseModel

from .location import Location
from .staff import Staff
from .program import Program

class Course(BaseModel):
	"""
	A course.

	Attributes:

		id
		The course ID.

		name
		The course name.

		description
		A description of the course.

		notes
		Any notes that have been written about the course.

		start_date
		Date and time that the course starts.

		end_date
		Date and time that the course ends.

		location
		Contains information about the location.

		organizer
		Contains information about the staff member in charge of organizing
		the event.

		program
		Contains information about the service category to which the course
		belongs.

		image_url
		The URL of the image associated with this course, if one exists.
	"""

	input_map = {
		'Id': 'id',
		'Name': 'name',
		'Description': 'description',
		'Notes': 'notes',
		'StartDate': 'start_date',
		'EndDate': 'end_date',
		'Location': ('location', Location),
		'Organizer': ('organizer', Organizer),
		'Program': ('program', Program),
		'ImageUrl': 'image_url',
		}

	output_map = {
		'id': 'Id',
		'name': 'Name',
		'description': 'Description',
		'notes': 'Notes',
		'start_date': 'StartDate',
		'end_date': 'EndDate',
		'location': 'Location',
		'organizer': 'Organizer',
		'program': 'Program',
		'image_url': 'ImageUrl',
		}

	id = None
	name = None
	description = None
	notes = None
	start_date = None
	end_date = None
	location = None
	organizer = None
	program = None
	image_url = None

