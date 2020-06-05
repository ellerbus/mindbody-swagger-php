from .base_model import BaseModel

from .user import User

class IssueResponse(BaseModel):
	"""
	POST UserToken/Issue successful response

	Attributes:

		access_token
		The authentication token value.

		user
		Contains information about the user represented by the access token.
	"""

	input_map = {
		'TokenType': 'token_type',
		'AccessToken': 'access_token',
		'User': ('user', User)
		}

	output_map = {
		'token_type': 'TokenType',
		'access_token': 'AccessToken',
		'user': 'User',
		}