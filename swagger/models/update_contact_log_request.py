from .base_model import BaseModel


class UpdateContactLogRequest(BaseModel):
	"""
	no description available

	Attributes:

		id
		The ID of the contact log being updated.

		test
		When `true`, indicates that this is a test request and no data is
		inserted into the subscriber’s database.<br />  When `false`, the
		database is updated.

		assigned_to_staff_id
		The ID of the staff member to whom the contact log is now being
		assigned.

		text
		The contact log’s new text.

		contact_name
		The name of the new person to be contacted by the assigned staff
		member.

		followup_by_date
		The new date by which the assigned staff member should complete this
		contact log.

		contact_method
		The new method by which the client wants to be contacted.

		comments
		Contains information about the comments being updated or added to the
		contact log. Comments that have an ID of `0` are added to the contact
		log.

		types
		Contains information about the contact logs types being assigned to
		the contact log, in addition to the contact log types that are already
		assigned.
	"""

	input_map = {
		'Id': 'id',
		'Test': 'test',
		'AssignedToStaffId': 'assigned_to_staff_id',
		'Text': 'text',
		'ContactName': 'contact_name',
		'FollowupByDate': 'followup_by_date',
		'ContactMethod': 'contact_method',
		'Comments': 'comments',
		'Types': 'types',
		}

	output_map = {
		'id': 'Id',
		'test': 'Test',
		'assigned_to_staff_id': 'AssignedToStaffId',
		'text': 'Text',
		'contact_name': 'ContactName',
		'followup_by_date': 'FollowupByDate',
		'contact_method': 'ContactMethod',
		'comments': 'Comments',
		'types': 'Types',
		}