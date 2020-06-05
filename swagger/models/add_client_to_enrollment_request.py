from .base_model import BaseModel


class AddClientToEnrollmentRequest(BaseModel):
	"""
	no description available

	Attributes:

		client_id
		The ID of the client who is being booked into the enrollment.

		class_schedule_id
		The ID of the class schedule (enrollment) into which the client is
		being booked.

		enroll_date_forward
		Enroll the clients from this date forward. `EnrollDateForward` takes
		priority over open enrollment.

		enroll_open
		Enroll for selected days.

		test
		When `true`, input information is validated, but not committed.<br />
		Default: **false**

		send_email
		When `true`, indicates that the client should be sent an email. An
		email is only sent if the client has an email address and automatic
		emails have been set up.<br />  Default: **false**

		waitlist
		When `true`, the client is added to a specific enrollments waiting
		list.

		waitlist_entry_id
		The waiting list entry to add. Used to add a client to an enrollment
		from a waiting list entry.
	"""

	input_map = {
		'ClientId': 'client_id',
		'ClassScheduleId': 'class_schedule_id',
		'EnrollDateForward': 'enroll_date_forward',
		'EnrollOpen': 'enroll_open',
		'Test': 'test',
		'SendEmail': 'send_email',
		'Waitlist': 'waitlist',
		'WaitlistEntryId': 'waitlist_entry_id',
		}

	output_map = {
		'client_id': 'ClientId',
		'class_schedule_id': 'ClassScheduleId',
		'enroll_date_forward': 'EnrollDateForward',
		'enroll_open': 'EnrollOpen',
		'test': 'Test',
		'send_email': 'SendEmail',
		'waitlist': 'Waitlist',
		'waitlist_entry_id': 'WaitlistEntryId',
		}	def __init__(self, client_id, class_schedule_id):
		self.client_id = client_id
		self.class_schedule_id = class_schedule_id
