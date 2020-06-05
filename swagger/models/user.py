from .base_model import BaseModel


class User(BaseModel):
	"""
	no description available

	Attributes:

		id
		The user’s ID at the business. This is always 0 for Admin and Owner
		type users.

		first_name
		The user’s first name.

		last_name
		The user’s last name.

		type
		The user’s type. Possible values are:  * Staff  * Owner  * Admin
	"""

	input_map = {
		'Id': 'id',
		'FirstName': 'first_name',
		'LastName': 'last_name',
		'Type': 'type',
		}

	output_map = {
		'id': 'Id',
		'first_name': 'FirstName',
		'last_name': 'LastName',
		'type': 'Type',
		}