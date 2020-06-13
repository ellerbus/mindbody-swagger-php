from .base_model import BaseModel


class GetTipsRequest(BaseModel):
	"""
	no description available

	Attributes:

		staff_id
		A list of staff IDs that you want to retrieve payroll information for.
		If you do not supply a `StaffId`, all active staff members return,
		ordered by staff ID.

		start_date_time
		The beginning of the date range for the payroll information to be
		returned. The maximum allowed date range is 14 days.  * If you do not
		supply a `StartDateTime`, data returns for the seven days prior to the
		`EndDateTime` that you supply.  * If you do not supply either a
		`StartDateTime` or an `EndDateTime`, the data returns for seven days
		prior to today’s date.

		end_date_time
		The end of the date range for the payroll information to be returned.
		The maximum allowed date range is 14 days.<br />  Default: **Today’s
		date**  * If you do not supply an `EndDateTime`, the data returns for
		the period from the `StartDateTime` that you supply to today’s date.
		* If you do not supply an `EndDateTime` or a `StartDateTime`, data
		returns for the seven days prior to today’s date.

		limit
		Number of results to include, defaults to 100

		offset
		Page offset, defaults to 0.
	"""

	input_map = {
		'StaffId': 'staff_id',
		'StartDateTime': 'start_date_time',
		'EndDateTime': 'end_date_time',
		'Limit': 'limit',
		'Offset': 'offset',
		}

	output_map = {
		'staff_id': 'StaffId',
		'start_date_time': 'StartDateTime',
		'end_date_time': 'EndDateTime',
		'limit': 'Limit',
		'offset': 'Offset',
		}

	staff_id = None
	start_date_time = None
	end_date_time = None
	limit = None
	offset = None

