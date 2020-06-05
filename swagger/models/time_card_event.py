from .base_model import BaseModel


class TimeCardEvent(BaseModel):
	"""
	no description available

	Attributes:

		staff_id
		The ID of the requested staff member.

		task
		The staff member’s job title.

		time_in
		The time that the staff member started the job task.

		time_out
		The time that the staff member stopped doing the job task.

		hours
		The number of hours on this time card, rounded to the nearest fourth
		decimal place.

		hourly_rate
		The hourly rate the business pays this staff for this `Task`.

		earnings
		The total amount earned by the staff member for this time card entry.
	"""

	input_map = {
		'StaffId': 'staff_id',
		'Task': 'task',
		'TimeIn': 'time_in',
		'TimeOut': 'time_out',
		'Hours': 'hours',
		'HourlyRate': 'hourly_rate',
		'Earnings': 'earnings',
		}

	output_map = {
		'staff_id': 'StaffId',
		'task': 'Task',
		'time_in': 'TimeIn',
		'time_out': 'TimeOut',
		'hours': 'Hours',
		'hourly_rate': 'HourlyRate',
		'earnings': 'Earnings',
		}