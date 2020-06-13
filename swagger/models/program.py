from .base_model import BaseModel


class Program(BaseModel):
	"""
	no description available

	Attributes:

		id
		The service category’s ID.

		name
		The name of this service category.

		schedule_type
		The service category’s schedule type.

		cancel_offset
		The offset to use for the service category.
	"""

	input_map = {
		'Id': 'id',
		'Name': 'name',
		'ScheduleType': 'schedule_type',
		'CancelOffset': 'cancel_offset',
		}

	output_map = {
		'id': 'Id',
		'name': 'Name',
		'schedule_type': 'ScheduleType',
		'cancel_offset': 'CancelOffset',
		}

	id = None
	name = None
	schedule_type = None
	cancel_offset = None

