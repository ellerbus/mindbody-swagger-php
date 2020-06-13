from .base_model import BaseModel

from .level import Level
from .program import Program
from .session_type import SessionType

class ClassDescription(BaseModel):
	"""
	Represents a class definition. The class meets at the start time, goes
	until the end time.

	Attributes:

		active
		When `true`, indicates that the business can assign this class
		description to new class schedules.<br />  When `false`, indicates
		that the business cannot assign this class description to new class
		schedules.

		description
		The long version of the class description.

		id
		The class description's ID.

		image_url
		The class description's image URL, if any. If it does not exist,
		nothing is returned.

		last_updated
		The date this class description was last modified.

		level
		The level information about this class.

		name
		The name of this class description.

		notes
		Any notes about the class description.

		prereq
		Any prerequisites for the class.

		program
		Contains information about the class description's program.

		session_type
		Contains information about the class description's session type.

		category
		The category of this class description.

		category_id
		The category ID of this class description.

		subcategory
		The subcategory of this class description.

		subcategory_id
		The subcategory ID of this class description.
	"""

	input_map = {
		'Active': 'active',
		'Description': 'description',
		'Id': 'id',
		'ImageURL': 'image_url',
		'LastUpdated': 'last_updated',
		'Level': ('level', Level),
		'Name': 'name',
		'Notes': 'notes',
		'Prereq': 'prereq',
		'Program': ('program', Program),
		'SessionType': ('session_type', SessionType),
		'Category': 'category',
		'CategoryId': 'category_id',
		'Subcategory': 'subcategory',
		'SubcategoryId': 'subcategory_id',
		}

	output_map = {
		'active': 'Active',
		'description': 'Description',
		'id': 'Id',
		'image_url': 'ImageURL',
		'last_updated': 'LastUpdated',
		'level': 'Level',
		'name': 'Name',
		'notes': 'Notes',
		'prereq': 'Prereq',
		'program': 'Program',
		'session_type': 'SessionType',
		'category': 'Category',
		'category_id': 'CategoryId',
		'subcategory': 'Subcategory',
		'subcategory_id': 'SubcategoryId',
		}

	active = None
	description = None
	id = None
	image_url = None
	last_updated = None
	level = None
	name = None
	notes = None
	prereq = None
	program = None
	session_type = None
	category = None
	category_id = None
	subcategory = None
	subcategory_id = None

