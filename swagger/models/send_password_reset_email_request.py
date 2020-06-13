from .base_model import BaseModel


class SendPasswordResetEmailRequest(BaseModel):
	"""
	Request to send a password reset email to a user

	Attributes:

		user_email
		The user’s email address. The software uses this parameter as the
		username.

		user_first_name
		The user’s first name. The software uses this parameter to verify
		the user.

		user_last_name
		The user’s last name. The software uses this parameter to verify the
		user.
	"""

	input_map = {
		'UserEmail': 'user_email',
		'UserFirstName': 'user_first_name',
		'UserLastName': 'user_last_name',
		}

	output_map = {
		'user_email': 'UserEmail',
		'user_first_name': 'UserFirstName',
		'user_last_name': 'UserLastName',
		}

	user_email = None
	user_first_name = None
	user_last_name = None



	def __init__(self, user_email, user_first_name, user_last_name):
		self.user_email = user_email
		self.user_first_name = user_first_name
		self.user_last_name = user_last_name
