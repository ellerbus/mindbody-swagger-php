from .base_model import BaseModel


class IssueRequest(BaseModel):
	"""
	POST UserToken/Issue request

	Attributes:

		username
		The staff member’s username.

		password
		The staff member’s password.
	"""

	input_map = {
		'Username': 'username',
		'Password': 'password',
		}

	output_map = {
		'username': 'Username',
		'password': 'Password',
		}

	username = None
	password = None

