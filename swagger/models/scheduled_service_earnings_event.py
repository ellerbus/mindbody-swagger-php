from .base_model import BaseModel


class ScheduledServiceEarningsEvent(BaseModel):
	"""
	no description available

	Attributes:

		staff_id
		The ID of the staff member who taught the class.

		scheduled_service_id
		The class' ID.

		scheduled_service_type
		The type of the scheduled service; i.e, a class, appointment, or
		enrollment.

		earnings
		The total monetary amount the staff is to be paid for this class.
	"""

	input_map = {
		'StaffId': 'staff_id',
		'ScheduledServiceId': 'scheduled_service_id',
		'ScheduledServiceType': 'scheduled_service_type',
		'Earnings': 'earnings',
		'DateTime': 'date_time',
		}

	output_map = {
		'staff_id': 'StaffId',
		'scheduled_service_id': 'ScheduledServiceId',
		'scheduled_service_type': 'ScheduledServiceType',
		'earnings': 'Earnings',
		'date_time': 'DateTime',
		}

	staff_id = None
	scheduled_service_id = None
	scheduled_service_type = None
	earnings = None
	date_time = None

