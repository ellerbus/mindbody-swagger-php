from .base_model import BaseModel

from .pagination_response import PaginationResponse
from .class_schedule import ClassSchedule

class GetClassSchedulesResponse(BaseModel):
	"""
	no description available

	Attributes:

		pagination_response
		Contains information about the pagination used.

		class_schedules
		Contains information about the class schedules.
	"""

	input_map = {
		'PaginationResponse': ('pagination_response', PaginationResponse),
		'ClassSchedules': ['class_schedules', ClassSchedule],
		}

	output_map = {
		'pagination_response': 'PaginationResponse',
		'class_schedules': 'ClassSchedules',
		}

	pagination_response = None
	class_schedules = None

