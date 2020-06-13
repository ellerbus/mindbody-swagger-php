from .base_model import BaseModel


class SubstituteClassTeacherRequest(BaseModel):
	"""
	no description available

	Attributes:

		class_id
		The ID of the class to which a substitute teacher needs to be
		assigned.

		staff_id
		The staff ID of the teacher to substitute.

		override_conflicts
		When `true`, overrides any conflicts in the schedule.

		send_client_email
		When `true`, sends the client an automatic email about the
		substitution, if the client has opted to receive email.

		send_original_teacher_email
		When `true`, sends the originally scheduled teacher an automatic email
		about the substitution.

		send_substitute_teacher_email
		When `true`, sends the substituted teacher an automatic email about
		the substitution.
	"""

	input_map = {
		'ClassId': 'class_id',
		'StaffId': 'staff_id',
		'OverrideConflicts': 'override_conflicts',
		'SendClientEmail': 'send_client_email',
		'SendOriginalTeacherEmail': 'send_original_teacher_email',
		'SendSubstituteTeacherEmail': 'send_substitute_teacher_email',
		}

	output_map = {
		'class_id': 'ClassId',
		'staff_id': 'StaffId',
		'override_conflicts': 'OverrideConflicts',
		'send_client_email': 'SendClientEmail',
		'send_original_teacher_email': 'SendOriginalTeacherEmail',
		'send_substitute_teacher_email': 'SendSubstituteTeacherEmail',
		}

	class_id = None
	staff_id = None
	override_conflicts = None
	send_client_email = None
	send_original_teacher_email = None
	send_substitute_teacher_email = None



	def __init__(self, class_id, staff_id):
		self.class_id = class_id
		self.staff_id = staff_id
