from .base_model import BaseModel


class BookingWindow(BaseModel):
	"""
	The booking window for registration

	Attributes:

		start_date_time
		Date and time that the booking window opens; that is, the first day of
		sales.

		end_date_time
		Date and time that the booking window closes; that is, the last day of
		sales.

		daily_start_time
		The time that the booking window opens; that is, the time that the
		store opens.

		daily_end_time
		The time that the booking window closes; that is, the time that the
		store closes.
	"""

	input_map = {
		'StartDateTime': 'start_date_time',
		'EndDateTime': 'end_date_time',
		'DailyStartTime': 'daily_start_time',
		'DailyEndTime': 'daily_end_time',
		}

	output_map = {
		'start_date_time': 'StartDateTime',
		'end_date_time': 'EndDateTime',
		'daily_start_time': 'DailyStartTime',
		'daily_end_time': 'DailyEndTime',
		}