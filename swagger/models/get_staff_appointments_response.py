from .base_model import BaseModel

from .pagination_response import PaginationResponse

class GetStaffAppointmentsResponse(BaseModel):
	"""
	no description available

	Attributes:

		pagination_response
		Contains information about the pagination used. ,

		appointments
		Contains information about appointments and their details.
	"""

	input_map = {
		'PaginationResponse': ('pagination_response', PaginationResponse),
		'Appointments': 'appointments',
		}

	output_map = {
		'pagination_response': 'PaginationResponse',
		'appointments': 'Appointments',
		}